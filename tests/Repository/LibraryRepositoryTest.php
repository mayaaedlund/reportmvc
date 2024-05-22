<?php

namespace App\Tests\Repository;
use App\Entity\Library;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class LibraryRepositoryTest extends KernelTestCase
{
    private $entityManager;
    private $libraryRepository;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
        $this->libraryRepository = $this->entityManager
            ->getRepository(Library::class);
    }

    
    public function testFindAll()
    {
        $libraries = $this->libraryRepository->findAll();

        $this->assertNotEmpty($libraries);
        $this->assertContainsOnlyInstancesOf(Library::class, $libraries);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
