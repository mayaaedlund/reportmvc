<?php

namespace App\Controller;

use App\Entity\Library;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\LibraryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    #[Route('/library', name: 'app_library')]
    public function index(): Response
    {
        return $this->render('library/index.html.twig', [
            'controller_name' => 'LibraryController',
        ]);
    }

    #[Route('/library/view', name: 'library_view_all')]
    public function viewAllLibrary(
        LibraryRepository $libraryRepository
    ): Response {
        $library = $libraryRepository->findAll();

        return $this->render('library/view.html.twig', [
            'library' => $library
        ]);
    }

    #[Route('/library/show/{id}', name: 'book_by_id')]
    public function showBookById(
        LibraryRepository $libraryRepository,
        int $id
    ): Response {
        $library = $libraryRepository->find($id);

        if (!$library) {
            throw $this->createNotFoundException(
                'No book found for id ' . $id
            );
        }

        return $this->render('library/viewone.html.twig', [
            'library' => $library
        ]);
    }


    #[Route('/library/delete', name: 'book_del', methods: ['GET'])]
    public function libraryDelete(): Response
    {
        return $this->render('library/delete.html.twig');
    }

    #[Route('/library/delete', name: 'book_delete')]
    public function deleteBook(
        Request $request,
        ManagerRegistry $doctrine
    ): Response {
        $bookId = $request->request->get('book_id');

        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Library::class)->find($bookId);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for ID ' . $bookId
            );
        }

        $entityManager->remove($book);
        $entityManager->flush();

        return $this->redirectToRoute('library_view_all');
    }

    #[Route('/library/change/{id}', name: 'book_change')]
    public function changeBook(
        Request $request,
        ManagerRegistry $doctrine,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $library = $entityManager->getRepository(Library::class)->find($id);

        if (!$library) {
            throw $this->createNotFoundException(
                'No book found for id ' . $id
            );
        }

        return $this->render('library/change.html.twig', [
            'library' => $library
        ]);
    }


    #[Route('/library/changed/{id}', name: 'update_Book', methods: ['POST'])]
    public function updateBook(
        Request $request,
        ManagerRegistry $doctrine,
        int $id
    ): Response {
        $entityManager = $doctrine->getManager();
        $library = $entityManager->getRepository(Library::class)->find($id);
    
        if (!$library) {
            throw $this->createNotFoundException(
                'No book found for id ' . $id
            );
        }
    
        // Hämta data från begäran
        $requestData = $request->request->all();
    
        // Uppdatera bokens attribut om de inte är tomma
        if (!empty($requestData['book'])) {
            $library->setBook($requestData['book']);
        }
        if (!empty($requestData['isbn'])) {
            $library->setISBN($requestData['isbn']);
        }
        if (!empty($requestData['author'])) {
            $library->setAuthor($requestData['author']);
        }
        if (!empty($requestData['image'])) {
            $library->setImage($requestData['image']);
        }
    
        // Spara ändringarna
        $entityManager->flush();
    
        // Omdirigera till sidan för att visa information om boken efter ändringarna
        return $this->redirectToRoute('library_view_all');
    }
    

    #[Route('/library/create', name: 'book_add', methods: ['GET'])]
    public function libraryAdd(): Response
    {
        return $this->render('library/create.html.twig');
    }

    #[Route('/library/create', name: 'book_create', methods: ['POST'])]
    public function createBook(
        Request $request,
        ManagerRegistry $doctrine
    ): Response {
        $entityManager = $doctrine->getManager();

        $library = new Library();
        $library->setBook($request->request->get('book'));
        $library->setISBN($request->request->get('isbn'));
        $library->setAuthor($request->request->get('author'));
        $library->setImage($request->request->get('image'));

        // Spara boken
        $entityManager->persist($library);
        $entityManager->flush();

        return $this->redirectToRoute('library_view_all');
    }
}



