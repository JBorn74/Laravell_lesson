

    @for($id=1;$id<5;$id++)

    <form action="/public/blog/details/<?=$id;?>" class="form-control alert-primary container mb-3" method="get">
        @csrf
    <h3>Запись на сайте</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores odit provident voluptas! Accusamus
        aspernatur iure laudantium magni, omnis unde veritatis. Adipisci animi cumque, ex nemo perferendis
        reiciendis sit suscipit ut. </p>

    <button id="det<?=$id;?>" class="btn btn-success" type="submit">Детальнее</button>

    </form>
    @endfor


