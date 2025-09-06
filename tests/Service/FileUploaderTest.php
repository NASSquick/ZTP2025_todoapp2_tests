<?php

namespace App\Tests\Service;

use App\Service\FileUploader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploaderTest extends TestCase
{
    private string $targetDirectory;

    protected function setUp(): void
    {
        // Use a temporary directory for testing
        $this->targetDirectory = sys_get_temp_dir() . '/uploads_test';
        if (!is_dir($this->targetDirectory)) {
            mkdir($this->targetDirectory, 0777, true);
        }
    }

    protected function tearDown(): void
    {
        // Clean up all files created during the test
        $files = glob($this->targetDirectory . '/*');
        foreach ($files as $file) {
            unlink($file);
        }
        rmdir($this->targetDirectory);
    }

    public function testUploadCreatesFile(): void
    {
        $uploader = new FileUploader($this->targetDirectory);

        // Create a temporary file to simulate an uploaded file
        $tempFile = tempnam(sys_get_temp_dir(), 'upl');
        file_put_contents($tempFile, 'dummy content');

        $uploadedFile = new UploadedFile(
            $tempFile,
            'example.txt',
            'text/plain',
            null,
            true // mark test mode to prevent moving restrictions
        );

        $fileName = $uploader->upload($uploadedFile);

        $this->assertFileExists($this->targetDirectory . '/' . $fileName);
        $this->assertStringEndsWith('.txt', $fileName);
    }

    public function testGetTargetDirectory(): void
    {
        $uploader = new FileUploader($this->targetDirectory);
        $this->assertSame($this->targetDirectory, $uploader->getTargetDirectory());
    }
}
