<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    // Configura el destinatario del correo electrónico
    $destinatario = "tu_correo@example.com";

    // Construye el cuerpo del correo electrónico
    $corpo_mensagem = "Nome: $nome\n";
    $corpo_mensagem .= "Email: $email\n";
    $corpo_mensagem .= "Assunto: $assunto\n\n";
    $corpo_mensagem .= "Mensagem:\n$mensagem";

    // Envía el correo electrónico
    $enviado = mail($destinatario, $assunto, $corpo_mensagem);

    // Devuelve una respuesta JSON
    if ($enviado) {
        echo json_encode(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao enviar a mensagem.']);
    }
} else {
    // Si no es una solicitud POST, devolver un error
    echo json_encode(['success' => false, 'message' => 'Método não permitido.']);
}
?>