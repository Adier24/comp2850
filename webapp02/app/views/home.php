<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    
    <?php
        require_once "public/html_header.php";
    ?>

</head>
<body>

<div style="background-image: url('https://images.alphacoders.com/458/thumb-1920-458169.jpg'); background-size: cover; background-position: center; border">
    <div class="container">
        
    <header class="black-header">
            <h1 class="white-text">Bienvenido a Nuestra Aplicación</h1>
            <nav>
                <div class="container">
                    <div class="btn-container">
                        <a href="./index.php?url=user/index" class="btn btn-primary">Ver Usuarios</a>
                        <a href="./index.php?url=product/index" class="btn btn-primary">Ver Productos</a>
                        <a href="./index.php?url=supplier/index" class="btn btn-primary">Ver Suplidores</a>
                    </div>
                </div>
            </nav>
        </header>

    
        <main>
            <section>
                <div>
                    <?php 
                        if (isset($data)) // if Data exist
                        {
                            if (isset($data['message'])) {
                                echo '<div class="alert alert-warning">';
                                echo $data['message'];
                                echo '</div>';
                            }
                            require_once $data['view'];
                        }
                        else {
                            $userController = new UserController();
                            $data = $userController->listUsers();
                            require 'user/list.php';
                        }
                    ?>
                </div>
            </section>
        </main>
        
        
        <h5>Descripción de la Aplicación</h5>
        
            <section class='mt-5'>
                
                <p>Esta es una aplicación web desarrollada en PHP siguiendo el patrón de diseño MVC.</p>
                <!-- Agrega más contenido relevante aquí -->
            </section>
            <footer class="black-header">
            <p>&copy; Adier Maldonado</p>
        </footer>

        </div>
    </div>
</body>
</html>
