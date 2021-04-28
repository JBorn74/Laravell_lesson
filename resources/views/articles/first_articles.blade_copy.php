
<form action="/details" class="" method="post">
    @for($i=0;$i<4;$i++)
        <div class="jumbotron form-control alert-primary container mb-3">
    <h3>Запись на сайте</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores odit provident voluptas! Accusamus
        aspernatur iure laudantium magni, omnis unde veritatis. Adipisci animi cumque, ex nemo perferendis
        reiciendis sit suscipit ut. </p>

    <button id="det<?=$i;?>" class="btn btn-success">Детальнее</button>
        </div>
    @endfor
    </form>

