<?php get_header(); ?>

    <main class="main-yogamer menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>

        <div class="container">
            <div class="top">
                <div class="left">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SehLoiro">
                    </div>
                    <h1>Seja um YoGamer do Bem</h1>
                </div>
                <figure>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/yodinha-yogamer.jpg" alt="YoGamer do Bem">
                </figure>
            </div>
            <div class="text">
                <p>Quer ser um YoGamer?</p>
                <p>Seja um voluntário! Veja as possibilidades.<p>
                <p>Voluntário Pontual YGB<p>
                <p>Esta forma de participação permite que a Comunidade Gamer coloque-se à disposição para contribuir pontualmente com as ações planejadas pelo YGB.
                Para isso, você precisa preencher o formulário YGB e escolher uma maneira de colaborar e enviar para nossa equipe YGB.<p>
                <ul>
                    <li>Você pode oferecer-se para apoiar em uma determinada ação.
                    Por exemplo: um voluntário pontual pode apoiar uma ação ou evento ou em qualquer outra atividade que demandar. Fale com nossa equipe ,
                    envie o formulário e fique sabendo das próximas ações YGB</li>
                    <li>Você pode oferecer suas habilidades e disponibilidades. Nesse caso, o YGB poderá procurá-lo caso precisem de alguma ajuda pontual.
                    Por exemplo: um voluntário pontual pode oferecer suas habilidades profissionais ou pessoais, seu desejo de atuar com designer gráfico, fotógrafo,
                    editor, planejador de projetos, atividades manuais ou atividades a distância.</li>
                    <li>Você pode participar das campanhas institucionais.</li>
                    <li>Você pode ser voluntário por um dia no espaço YGB</li>
                </ul>
                <p>Não vamos deixar ninguém para trás e avançar na construção de um mundo melhor. São ótimas oportunidades para você experimentar o trabalho
                voluntário e contribuir para um grande esforço comum.</p>
                <p>Colabore,<br>
                indique parceiros,<br>
                Seja um YoGamer do Bem</p>
            </div>
            <div class="form">
                <h2>Preencha o formulário</h2>
                <p>Este formulário é exclusivo para a comunidade Gamer e seus convidados.<br>
                Se você é um Patrocinador ou parceiro fale direto conosco:<br>
                contato@sehloirooficial.com.br</p>
                <form class="js-form ui-form" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" data-form-ajax="true">
                    <input type="hidden" name="action" value="form_ygb">
                    <div class="grid">
                        <input type="text" name="nome" placeholder="Seu Nome" class="two-thirds" required>
                        <input type="text" name="sobrenome "placeholder="Sobrenome" class="one-third" required>
                    </div>
                    <div class="grid">
                        <input type="email" name="email" placeholder="E-mail" required>
                        <input type="email" name="email_confirmacao" placeholder="Confirmação do E-mail" required>
                    </div>
                    <div class="grid">
                        <div class="grid no-margin">
                            <input type="text" name="cidade" placeholder="Cidade" class="city" required>
                            <select name="estado" class="uf" required>
                                <option value="" selected hidden>UF</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AM">Amazonas</option>
                                <option value="AP">Amapá</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RO">Rondônia</option>
                                <option value="ES">Rio Grande do Sul</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SE">Sergipe</option>
                                <option value="SP">São Paulo</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div class="grid no-margin">
                            <input type="text" name="telefone" placeholder="Telefone" class="two-thirds" required>
                            <input type="text" name="celular" placeholder="Celular" class="two-thirds" required>
                        </div>
                    </div>
                    <div class="column">
                        <span>Como quer ajudar:</span>
                        <label>
                            <input type="checkbox" name="how[]" value="Colaborar para uma determinada ação" required>
                            <span>Colaborar para uma determinada ação</span>
                        </label>
                        <div class="grid">
                            <label>
                                <input type="checkbox" name="how[]" value="Oferecer habilidades ou disponibilidades" required>
                                <span>Oferecer habilidades ou disponibilidades</span>
                            </label>
                            <input type="text" name="habilidades" placeholder="Quais" class="two-thirds">
                        </div>
                        <label>
                            <input type="checkbox" name="how[]" value="Participar na divulgação das Campanhas Institucionais" required>
                            <span>Participar na divulgação das Campanhas Institucionais</span>
                        </label>
                        <label>
                            <input type="checkbox" name="how[]" value="Participar na divulgação das Campanhas Institucionais" required>
                            <span>Voluntário por um dia no espaço YGB</span>
                        </label>
                    </div>
                    <button class="ui-button">
                        <span class="icon-angle-right"></span>
                        <span class="text">Enviar</span>
                    </button>
                </form>
            </div>
        </div>

<?php get_footer(); ?>