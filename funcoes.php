<?php

        /*Função para verificar senhas fortes
            Verifica 6 requisitos para senhas seguras
            
            Número mínimo de caracteres
            Número maximo de caracteres
            Letras maiúsculas
            Letras minúsculas
            Caracteres especiais
            Números de 0-9

        */
        function verificarSenha($senha) {
        

        $requisitos = [
            'caracter_min' => 8,
            'maiuscula' => true,
            'minuscula' => true,
            'especial' => true,
            'numero' => true,
        ];

        if (strlen($senha) < $requisitos['caracter_min']){
            return "<p>A senha deve ter no mínimo " . $requisitos['caracter_min'] . " caracteres.<p>";
        }

        if ($requisitos['maiuscula'] && !preg_match('/[A-Z]/',$senha)){
            return "<p>A senha deve ter conter ao menos uma letra maiúscula.<p>";
        }

        if ($requisitos['minuscula'] && !preg_match('/[a-z]/',$senha)){
            return "<p>A senha deve ter conter ao menos uma letra minúscula.<p>";
        }

        if ($requisitos['numero'] && !preg_match('/[0-9]/',$senha)){
            return "<p>A senha deve ter conter ao menos um número.<p>";
        }

        if ($requisitos['especial'] && !preg_match('/[^a-zA-Z0-9]/',$senha)){
            return "<p>A senha deve ter conter ao menos um caractere especial.<p>";
        }

        return true;

        }

        /*Verificar Email 
            Caso a string não tenha "@gmail.com" não será aceita

            OBS: verifica apenas o campo, não valida o email.
        */
        function verificarEmail($email) {

            if(!isset($email)) {
                return "<p>Email não encontrado na sessão.</p>";
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "<p>Email inválido.</p>";
            }

            return true;
        }
?> 