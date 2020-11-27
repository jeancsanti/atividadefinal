<?php 
    $this->view('home/cabecario');
?>
<!-- Navigation-->
<?php
            $this->view('home/menu');
        ?>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content1">
            <h1 class="mb-0">
                Jean Carlos Santi</h1>
            <div class="subheading mb-5">
                Brasil · Mato Grosso, CEP: 5580-00· (66) 9 9999-999 ·
                <a class="cor" href=" mailto:name@email.com">jean@email.com</a>
            </div>
            <p class="lead mb-5"> Estou aprendendo sobre a programação web através do curso programador web.</br></p>
            <div class="social-icons">
                <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experiência</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Técnico Administrativo Educacional</h3>
                    <div class="subheading mb-3">Secretaria Escolar</div>
                    <p>Elaboração de documentos escolares, emissão de boletins, conferência de diário eletrônico,
                        atendimento ao público.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Março 2013 - Dezembro 2019</span></div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Menor Aprendiz</h3>
                    <div class="subheading mb-3">Grupo Cometa</div>
                    <p> Conferência e lançamento de peças, atendimento ao público.</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Março 2011 - Março 2012</span></div>
            </div>

        </div>

    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Educação</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Universidade Federal de Mato Grosso</h3>
                    <div class="subheading mb-3">Informática na Educação</div>
                    <div>Especialização</div>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Março 2018 - Março 2019</span></div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Universidade do Norte do Paraná</h3>
                    <div class="subheading mb-3">Gestão e Organização da Escola</div>
                    <div>Especialização</div>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Janeiro 2017 - Janeiro 2018</span></div>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">Universidade Estadual de Mato Grosso</h3>
                    <div class="subheading mb-3">Licenciatura em Computação</div>
                    <div>Graduação</div>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">Fevereiro 2011 - Dezembro 2014</span></div>
            </div>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Skills-->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Habilidades</h2>
            <div class="subheading mb-3">Linguagem de Programação</div>
            <ul class="list-inline dev-icons">
                <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                <li class="list-inline-item"><i class="fab fa-less"></i></li>
                <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                <li class="list-inline-item"><i class="fab fa-npm"></i></li>
            </ul>
            <div class="subheading mb-3" style="color: blue;">Workflow</div>
            <ul class="fa-ul mb-0">
                <li style=" color: black;">
                    <span class="fa-li" style=" color: blue;"><i class=" fas fa-check"></i></span>
                    Mobile-First, Responsive Design
                </li>
                <li style=" color: black;">
                    <span class="fa-li" style=" color: blue;"><i class="fas fa-check"></i></span>
                    Cross Browser Testing & Debugging
                </li>
                <li style=" color: black;">
                    <span class="fa-li" style=" color: blue;"><i class="fas fa-check"></i></span>
                    Cross Functional Teams
                </li>
                <li style=" color: black;">
                    <span class="fa-li" style=" color: blue;"><i class="fas fa-check"></i></span>
                    Agile Development & Scrum
                </li>
            </ul>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Interests-->
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <?php 
                    $this->view('home/form');
                ?>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Awards-->



    <?php 
    $this->view('home/rodape');
?>