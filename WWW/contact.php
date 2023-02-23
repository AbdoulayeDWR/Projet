<?php
    include("layout/header.html");
?>

<div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-8 m-4">
                <form action="mail.php" method="POST">
                    <div class="form-group">
                        <div class="text-center">
                            <h1>Contactez-nous ! </h1>
                        </div>
                        <div class="d-flex">
                            <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control"/>
                            <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control"/>
                        </div>
                        <br/>
                        <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                        <br/>
                        <textarea rows="10" name="message" placeholder="Votre message" class="form-control"></textarea>
                        <br/>
                        <br>
                            <textarea rows="10" name="subject" placeholder="Sujet" class="form-control"></textarea>
                        </br>       

                        <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>

<?php
    include("layout/footer.html");
?>
