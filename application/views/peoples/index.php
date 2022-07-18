<div class="container">
    <div class="row">
        <div class="col-md-10">


            <h3 class="mt-3"> Nama Nama Orang</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $people) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td> <?= $people['name']; ?> </td>
                            <td> <?= $people['email']; ?> </td>
                            <td>

                                <a href="" class=" -success">edit</a>
                                <a href="" class=" -danger">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>