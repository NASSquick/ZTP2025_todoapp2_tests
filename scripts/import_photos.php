<?php
// scripts/import_photos.php

use App\Entity\Photos;
use App\Entity\Galleries;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\Filesystem\Filesystem;

require dirname(__DIR__) . '/vendor/autoload.php';

// Load .env for DATABASE_URL
if (!isset($_SERVER['DATABASE_URL'])) {
    if (file_exists(dirname(__DIR__) . '/.env')) {
        $dotenv = new Dotenv();
        $dotenv->load(dirname(__DIR__) . '/.env');
    }
}

// Boot the Symfony kernel
$kernel = new \App\Kernel('dev', true);
$kernel->boot();

/** @var EntityManagerInterface $em */
$em = $kernel->getContainer()->get('doctrine')->getManager();

// Ensure at least one gallery exists
$gallery = $em->getRepository(Galleries::class)->findOneBy([]);
if (!$gallery) {
    $gallery = new Galleries();
    $gallery->setTitle('Default Gallery');
    $em->persist($gallery);
    $em->flush();
}

// Path to uploaded photos
$uploadDir = dirname(__DIR__) . '/public/uploads';
$filesystem = new Filesystem();

$files = array_diff(scandir($uploadDir), ['.', '..']);

foreach ($files as $file) {
    $filePath = $uploadDir . '/' . $file;

    // Skip non-files
    if (!is_file($filePath)) {
        continue;
    }

    $photo = new Photos();
    $photo->setFilename($file);
    $photo->setTitle(pathinfo($file, PATHINFO_FILENAME)); // use file name as title
    $photo->setText('Imported photo'); // default text
    $photo->setCreatedAt(new \DateTime());
    $photo->setUpdatedAt(new \DateTime());
    $photo->setGallery($gallery); // assign default gallery

    $em->persist($photo);
}

$em->flush();

echo "All photos imported successfully.\n";
