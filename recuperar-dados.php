    <?php
    if($_POST){
        $nome = $_POST["nome"] ?? NULL;
        $email = $_POST["email"] ?? NULL;
        $idade = $_POST["idade"] ?? NULL;
        $hobbie = $_POST["hobbie"] ?? NULL;

        if($idade < 18){
            echo"<script>alert('precisa ser maior de idade')</script>";
            echo "<script>location.href='form.php'</script>";
        }
        if(strlen($nome) < 6){
            echo"<script>alert('O nome precisa ter mais de 6 caracteres!')</script>";
            echo "<script>location.href='form.php'</script>";
        }
        
    }
    ?>
        <table>
            <tr>
                <th>NOME:</th>
                <br>
                <th>EMAIL:</th>
                <br>
                <th>IDADE:</th>
                <br>
                <th>HOBBIE:</th>
            </tr>

            <?php
        foreach($_POST as $post => $dadospost){
            ?>
            <td><br><?=$dadospost?></td>
            <?php
        }
        ?>
        </table>
        
        
        