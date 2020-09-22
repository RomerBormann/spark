<?php $this->layout('website');?>

<section class="container pt-5">
    <div class="row pb-1">
        <div class="col-12">
            <h1>Contact</h1>
        </div>
    </div>
</section>

<section class="container pb-5">
    <div class="row">
        <div class="col-lg-6 py-3">
            <h4>Adres</h4>
            <p>Contactweg 36, 1014 AN, Amsterdam</p>
            <h4>Mail</h4>
            <p>info@spark.nl</p>
            <h4>Telefoon</h4>
            <p>020 850 9500</p>
            <div>
                <iframe id="map" src="https://maps.google.com/maps?q=Contactweg%2036&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>

        <div class="col-lg-6 py-3">
            <h4>Formulier</h4>
            <form action="<?php echo url('contact.handle')?>" method="POST">
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="text" name="from_email" class="form-control" id="form-input" value="<?php echo input('from_email') ?>"  placeholder="email@voorbeeld.nl">
                    <?php if ( isset( $errors['email'] ) ): ?>
                        <p class="text-danger"><?php echo $errors['email'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="">Naam</label>
                    <input type="text" name="from_name" class="form-control" id="form-input"  placeholder="Jan Jansen">
                    <?php if ( isset( $errors['name'] ) ): ?>
                        <p class="text-danger"><?php echo $errors['name'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="">Jouw bericht</label>
                    <textarea class="form-control" name="contact_message" id="form-area"  rows="10"></textarea>
                    <?php if ( isset( $errors['message'] ) ): ?>
                        <p class="text-danger"><?php echo $errors['message'] ?></p>
                    <?php endif; ?>
                </div>
                <?php if ( isset( $success['send'] ) ): ?>
                    <p class="text-success"><?php echo $success['send'] . '<br />' ?></p>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary px-5 py-2">Verzenden</button>
            </form>
        </div>
    </div>
</section>