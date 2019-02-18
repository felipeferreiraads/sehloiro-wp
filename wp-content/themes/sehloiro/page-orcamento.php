<?php get_header(); ?>

    <main class="main-contact menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>
        <div class="container">
            <a href="<?php echo site_url('/'); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SehLoiro">
            </a>
            <h2>Formulário para entendermos o que você precisa e encaminharmos a melhor solução.</h2>
            <form class="js-form ui-form" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" data-form-ajax="true">
                <input type="hidden" name="action" value="form_contact">
                <div class="grid">
                    <input type="text" name="nome" placeholder="Nome" class="two-thirds" required>
                    <input type="text" name="apelido "placeholder="Nickname" class="one-third" required>
                </div>
                <div class="grid">
                    <input type="text" name="telefone" placeholder="Telefone" required>
                    <input type="email" name="email" placeholder="E-mail" required>
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
                    <div class="grid no-margin grid-brand">
                        <div class="label brand">Já possui marca?</div>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="possui_marca" value="Sim" required>
                                <span>Sim</span>
                            </label>
                            <label name="possui_marca">
                                <input type="radio" name="possui_marca" value="Não" required>
                                <span>Não</span>
                            </label>
                        </div>
                        <input type="text" name="outra_marca" placeholder="Qual?" class="no-border">
                    </div>
                </div>
                <div class="grid">
                    <input type="text" name="jogos" placeholder="O que você joga?" required>
                    <input type="text" name="canal" placeholder="Possui um canal?" required>
                </div>
                <div class="grid">
                    <span class="label interest">Serviços que tem interesse:</span>
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" name="interesse[]" value="Criação de marca" required>
                            <span>Criação de marca</span>
                        </label>
                        <label>
                            <input type="checkbox" name="interesse[]" value="Registro de marcas" required>
                            <span>Registro de marcas</span>
                        </label>
                        <label>
                            <input type="checkbox" name="interesse[]" value="Consultoria" required>
                            <span>Consultoria</span>
                        </label>
                        <label>
                            <input type="checkbox" name="interesse[]" value="Produção de Conteúdo" required>
                            <span>Produção de Conteúdo</span>
                        </label>
                    </div>
                </div>
                <div class="grid">
                    <textarea name="descricao" placeholder="Descreva suas expectativas e considerações importantes sobre o projeto" required></textarea>
                </div>
                <div class="bottom">
                    <button class="ui-button">
                        <span class="icon-angle-right"></span>
                        <span class="text">Solicitar orçamento</span>
                    </button>
                    <div class="contact">
                        <h3>E-mail</h3>
                        <a href="mailto:contato@sehloirooficial.com.br">contato@sehloirooficial.com.br</a>
                    </div>
                    <div class="contact">
                        <h3>Nossas redes</h3>
                        <div class="grid">
                            <a href="https://www.facebook.com/SehLoirooficial/" target="_blank">
                                <span class="icon-facebook"></span>
                            </a>
                            <a href="https://www.instagram.com/sehloirooficial/" target="_blank">
                                <span class="icon-instagram"></span>
                            </a>
                            <a href="https://www.instagram.com/sehloirooficial/" target="_blank">
                                <span class="icon-twitter"></span>
                            </a>
                            <a href="https://www.youtube.com/channel/UCuhVlANZXUATGv1dRmwcUzA" target="_blank">
                                <span class="icon-youtube"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

<?php get_footer(); ?>