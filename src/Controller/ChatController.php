<?php

namespace App\Controller;


use App\Service\ChatbotService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChatController extends AbstractController
{
    #[Route('/chat', name: 'chat')]
    public function chatPage(): Response
    {
        return $this->render('chat/chat.html.twig');
    }

    #[Route('/chat/message', name: 'chat_message', methods: ['POST'])]
    public function chatMessage(Request $request, ChatbotService $chatbotService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $userMessage = $data['message'] ?? '';

        $botReply = $chatbotService->ask($userMessage);

        return $this->json([
            'reply' => $botReply,
        ]);
    }
}
