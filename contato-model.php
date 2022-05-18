$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        echo "Email: $email <br>";
        echo "Telefone: $phone <br>";

        ?>