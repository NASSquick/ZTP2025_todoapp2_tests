<?php

namespace App\Tests\Controller;

use App\Entity\Comments;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class CommentsControllerTest extends WebTestCase
{
    private $client;
    private EntityManagerInterface $entityManager;

    protected function setUp(): void
    {
        $this->client = static::createClient();

        $this->entityManager = $this->client->getContainer()
            ->get('doctrine')
            ->getManager();

        // Begin transaction to rollback after each test (transactional tests)
        $this->entityManager->beginTransaction();
    }
    protected function tearDown(): void
    {
        parent::tearDown();

        if ($this->entityManager->getConnection()->isTransactionActive()) {
            $this->entityManager->rollback();
        }
        $this->entityManager->close();

        restore_exception_handler();
        self::ensureKernelShutdown();
    }
    private function logIn(): void
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy([]);
        $this->assertNotNull($user, 'No user found to login.');

        $roles = $user->getRoles();
        if (empty($roles)) {
            $roles = ['ROLE_USER'];
        }

        $firewallName = 'main';
        $token = new UsernamePasswordToken($user, $firewallName, $roles);

        // Start a session by making a request first to get the session cookie and session object
        $this->client->request('GET', '/');

        // Get session from the request
        $session = $this->client->getRequest()->getSession();
        $this->assertNotNull($session, 'Session not found in client request.');

        // Set the serialized token into the session
        $session->set('_security_' . $firewallName, serialize($token));
        $session->save();

        // Set the session cookie manually so subsequent requests carry the session
        $cookie = new Cookie($session->getName(), $session->getId());
        $this->client->getCookieJar()->set($cookie);
    }
    public function testIndexLoadsSuccessfully(): void
    {
        $crawler = $this->client->request('GET', '/Comments/');

        $this->assertResponseIsSuccessful();

        $this->assertSelectorExists('div.navigation.text-center');
        $this->assertSelectorExists('table.table-striped');
    }

    public function testShowReturnsSuccessForExistingComment(): void
    {
        $comment = $this->entityManager->getRepository(Comments::class)->findOneBy([]);
        $this->assertNotNull($comment, 'No comment found in the database for testing.');

        $crawler = $this->client->request('GET', '/Comments/' . $comment->getId());

        $this->assertResponseIsSuccessful();

        $h1Text = $crawler->filter('h1')->text();
        $this->assertStringContainsStringIgnoringCase('Comment details', $h1Text);

        $this->assertSelectorExists('dl.dl-horizontal');

        $nickDd = $crawler->filterXPath('//dt[contains(text(), "Nick")]/following-sibling::dd[1]');
        $this->assertStringContainsString($comment->getNick(), $nickDd->text());
    }

    public function testCreateFormLoadsForValidPhoto(): void
    {
        $photo = $this->entityManager->getRepository(\App\Entity\Photos::class)->findOneBy([]);
        $this->assertNotNull($photo, 'No photo found in the database for testCreateFormLoadsForValidPhoto.');

        $this->client->request('GET', '/Comments/create/' . $photo->getId() . '/photo');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form');
        $this->assertSelectorExists('input[name="comments[nick]"]');
        $this->assertSelectorExists('input[name="comments[email]"]');
        $this->assertSelectorExists('textarea[name="comments[text]"]');
    }

    public function testDeletePageLoads(): void
    {
        $this->logIn();

        $comment = $this->entityManager->getRepository(Comments::class)->findOneBy([]);
        $this->assertNotNull($comment, 'No comment found for delete test.');

        $crawler = $this->client->request('GET', '/Comments/' . $comment->getId() . '/delete');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form');
    }

    public function testDeleteComment(): void
    {
        $this->logIn();

        $comment = $this->entityManager->getRepository(Comments::class)->findOneBy([]);
        $this->assertNotNull($comment, 'No comment found for delete test.');

        // Load delete form page
        $crawler = $this->client->request('GET', '/Comments/' . $comment->getId() . '/delete');
        $this->assertResponseIsSuccessful();

        $form = $crawler->selectButton('action_delete')->form();

        $this->client->submit($form);

        $this->assertResponseRedirects('/Comments/');

        $this->client->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $deletedComment = $this->entityManager->getRepository(Comments::class)->find($comment->getId());
        $this->assertNull($deletedComment);
    }
}
