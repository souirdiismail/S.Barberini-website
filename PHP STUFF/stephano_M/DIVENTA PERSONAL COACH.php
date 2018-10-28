<?php require "header.php"?>
<?php require "functions.php";?>
<?php
    if(isset($_POST['submit']))
    {
		$fullname=$_POST['name'];
		$email=$_POST['email'];
		$mail_subject=$_POST['subject'];
		$content=$_POST['message'];
        $conn = $GLOBALS["conn"];
        $query="INSERT INTO `coach`(`email`, `fullname`, `mail_subject`, `content`, `datemail`, `confirmed`) VALUES ('{$_POST['email']}','{$_POST['name']}','{$_POST['subject']}','{$_POST['message']}',getdate(),0)";
        $conn->query($query);
        //addcoach($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);
    }
?>
    <section class="content container">
        <div class="profile-photo">
            <span class="card-img">
                <img src="Assets\stefano coach.png" alt="" class="portraits">
                <img src="Assets\Rectangle.png" alt="" class="stroke">
            </span>
        </div><br><br>
        <div class="text">
            <article>
                Vuoi lavorare da casa ed essere libero?
                <br><br>
                Scopri come diventare Personal Coach Herbalife, aiutando le persone a raggiungere i propri obiettivi di
                benessere!
                <br><br>
                Se sei stanco di lavorare per qualcun altro ed essere pagato il minimo, stanco di dover chiedere 1 ora
                di permesso (che ti può essere NEGATO) per portare tuo figlio dal pediatra.
                <br><br>
                Stanco di realizzare i sogni di qualcun altro…continua a leggere questa pagina….ho una soluzione
                concreta per te.
                <br><br>
                Vorresti sapere come anche tu, come me, potresti:
                <br><br>
                lavorare con Herbalife e diventare un PERSONAL COACH per avere un Guadagno EXTRA iniziando part time,
                con orari flessibili cosi da riuscire a gestire tutti i tuoi impegni familiari iniziando la tua
                attività indipendente con Herbalife, oppure
                <br><br>
                Iniziare un vero e proprio percorso di CARRIERA PROFESSIONALE con eccellenti prospettive di crescita
                personale e guadagno?
                <br><br>
                Per cominciare a LAVORARE SUBITO IN HERBALIFE CON NOI e diventare un PERSONAL COACH, compila il modulo
                qui sotto, ti riichiamerò entro 24 ore per spiegarti i dettagli e le scuole che ti offriremo (sia
                online che offline) per diventare PERSONAL COACH Herbalife.
            </article>
        </div>
    </section>
    <!--Contact Us-->
    <section class="contact text-center">
        <div class="container">
            <div class="content_contact ">
                <br><br>
                <h1>Contact Us</h1>
                <div class="">
                    <form action="" method="post" name="CoachForm">
                        <div class="form-row form_contact">
                            <div class="form-group col-md-6 contact_coach">
                                <input type="text" class="form-control" id="inputname4" name="name" data-num="1" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" name="email" data-num="1" placeholder="Email">
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="inputsubject" name="subject" data-num="1" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" rows="8" cols="80" class="form-control" data-num="1" id="inputmessage"
                                    placeholder="Message"></textarea>
                            </div>
                            <br>
                            <ul class="agreement">
                                <li> <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label></li>
                                <li class="agree_text">
                                    I Agree for condition.
                                </li>
                                <li class="li_button">
                                    <button type="submit" name="submit" class="btn btn_contact_coach">Submit</button>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact Us-->

<?php require "footer.php"?>