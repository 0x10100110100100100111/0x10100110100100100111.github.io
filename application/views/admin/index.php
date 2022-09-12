<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Data -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $json_respon = array();

    if (mysqli_num_rows($user) > 0) {
        while ($row = mysqli_fetch_array($user)) {
            $json_respon[] = $row;
        }
        echo json_encode(array('user' => $json_respon));
    }
    ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->