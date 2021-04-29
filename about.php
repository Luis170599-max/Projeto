<?php

// Configurações globais
require_once ('_config.php');





/***** Configurações da página *****/

// Título da página
$T['pageTitle'] = 'Sobre';

// CSS da página
$T['pageCSS'] = '/css/template.css';

// JavaScript da página
$T['pageJS'] = '/js/template.js';

// Cabeçalho da página
require_once('_header.php');

?>

            <!-- Conteúdo principal -->
            <article>

                <h2>Sobre Nos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quas libero ut ea odio, ab a
                    veritatis esse vitae cupiditate, rerum aliquid quisquam consequuntur doloribus soluta necessitatibus
                    labore accusantium eos.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic repellendus inventore nesciunt
                    voluptatum consectetur perspiciatis odio dolor quod modi deserunt quam cum itaque, accusamus
                    corrupti a laborum nulla. Natus, officiis.</p>
                <img src="https://picsum.photos/400/300" class="flush" alt="Imagem aleatória">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
               
            </article>

            <!-- Barra lateral -->
            <aside>
                <h3>Barra lateral</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <ul>
                    <li><a href="/">Link 1</a></li>
                    <li><a href="/">Link 2</a></li>
                    <li><a href="/">Link 3</a></li>
                    <li><a href="/">Link 4</a></li>
                </ul>
            </aside>

<?php

// Rodapé da página
require_once ('_footer.php');
