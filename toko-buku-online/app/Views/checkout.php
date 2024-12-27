<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h2>REVIEW ORDER</h2>
    <hr />
    <h5>BUMI MANUSIA</h5>
    <h5>Rp85,000</h5>

    <h2 class="mt-3">Alamat Pengiriman</h2>
    <hr />
    <h5>Jl. batang asai - sarolangun, pelawan.</h5>

    <h2 class="mt-3">METODE BAYAR</h2>
    <hr />
    <h5>Transfer Bank</h5>
    <h5>BSI ADITYA RAHMATTULLAH</h5>
    <h5>Rek. 081377786704</h5>

    <div class="mt-4">
  <form action="<?= base_url('submit')?>" method="POST">
<button type="submit" class="btn btn-success mb-5">Submit Order</button>
</form>
</div>

</div>
<?= $this->endSection()?>