<!DOCTYPE html>
<html><head>
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/btpn-logo.png'); ?>">    <style type="text/css">
        @media unduh and (width: 21cm) and (height: 33cm) {
            @page {
                margin: 4cm;
            }
        }

        .tabelku {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 2px;
            font-family: sans-serif;
        }
        .br{
            background-color: blue;
        }
    </style>
    <style type="text/css" media="unduh">
        @page {
            size: portrait;
        }
    </style>
</head><body>
    <center>
        <font style="font-size: 30px; font-family: sans-serif;"><b>CURICULUMU VITAE</b></font>
    </center>
    <br /><br />
    <!--  : <?php echo $dd->nama_lengkap; ?> -->
       <div class="container">
                    <table class="table tabelku"  width="100%" >
                          <tr>
                            <td class="text-center" ><center><img src="assets/images/user.jpg" alt="profile-image" style="width: 90px; height: 90px; border-top-right-radius: 60px; border-bottom-left-radius: 60px;"></center><br></td>
                            <td></td>
                            <td><b><?php echo $dd->nama_lengkap?></b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>No.KTP</b><br>
                                <?php echo $dd->no_ktp; ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>No.Handphone</b><br>
                                <?php echo $dd->kontak; ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Tempat Lahir</b><br>
                                <?php echo $dd->tempat_lahir; ?>
                            </td>
                            <td>vf</td>
                            <td>vf</td>
                            <td></td>
                        </tr>

                         <tr>
                            <td><b>Tanggal Lahir</b><br>
                                <?php echo date_indo($dd->tanggal_lahir); ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                           <tr>
                            <td><b>Status Pernikahan</b><br>
                                <?php echo $dd->status_nikah; ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                            <tr>
                            <td><b>Jenis Kelamin</b><br>
                                <?php echo $dd->jenis_kelamin; ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td><b>Agama</b><br>
                                <?php echo $dd->agama; ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>


                    </table>
                </div>
</body></html>