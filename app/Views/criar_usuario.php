<div class="container">
    <?php
       /* $atributos = ['class' => 'usuarios', 'id' => 'meuFormulario'];
        $hidden = ['usuario' => 'Pablo', 'user_id' => '123'];
        echo form_open('/usuarios/gravar', $atributos, $hidden);

            $data = [
                'name' => 'Camila',
                'email' => 'camila2024@gmail.com',
                'url' => 'https//meusite.com.br'
            ];
            echo form_hidden($data);

            $data = [
                'type' => 'text',
                'name' => 'email',
                'id' => 'email',
                'value' => 'camila2024@gmail.com',
                'class' => 'minhaclasse'
            ];
            echo form_input($data);

            $opcoes = [
                'p' => 'Camisa Pequena',
                'm' => 'Camisa Média',
                'g' => 'Camisa Grande',
                'gg' => 'Camisa Extra Grande'
            ];
            echo form_dropdown('camisas', $opcoes, 'm');

            $camisas_vendas = ['m', 'gg'];
            echo form_dropdown('camisas', $opcoes, $camisas_vendas);

            $data = [
                'name' => 'aceitar',
                'id' => 'aceitar',
                'value' => 'Aceitar',
                'checked' => TRUE,
                'style' => 'margin:10px;'
            ];
            echo form_checkbox($data);

            $atributos = [
                'class' => 'meulabel',
                'style' => 'color:red;',
            ];
            echo form_label('Meu nome é: ', 'nome', $atributos);

            echo form_submit('enviar', 'Enviar');
            $data = [
                'name' => 'enviar',
                'type' => 'submit',
                'class' => 'btn btn-primary',
                'content' => 'Enviar'
            ];
            echo form_button($data);

        echo form_close(); */
        $user = [
            'title' => 'text',
            'name' => 'user',
            'id' => 'user',
            'class' => 'form-control'
        ];
        $senha = [
            'title' => 'password',
            'name' => 'senha',
            'id' => 'senha',
            'class' => 'form-control'
        ];
        $btn = [
            'type' => 'submit',
            'name' => 'btn',
            'class' => 'btn btn-primary my-3',
            'content' => 'Gravar'
        ];
        echo form_open('/usuarios/gravar').
        form_label('Usuarios', 'user').
        form_input($user).
        form_label('Senha', 'senha').
        form_input($senha).
        form_button($btn).
        form_close();

    ?>
</div>






