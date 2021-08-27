
<?php


$conn = new mysqli("localhost", "root", "", "tms");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select * from websitereview";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row=$result->fetch_assoc() || x) {
?>

<?php
    }
}
?>

<script type ="text/javascript">
    what();
    function what(){
        document.getElementById('name1').innerHTML = 'HASIB HOSSAIN';
        document.getElementById('address1').innerHTML = 'TEJGAON, DHAKA';
        document.getElementById('review1').innerHTML = 'SO SATISFIED WITH THERE SERVICE';
        document.getElementById('name2').innerHTML = 'HASIB HOSSAIN';
        document.getElementById('address2').innerHTML = 'TEJGAON, DHAKA';
        document.getElementById('review2').innerHTML = 'SO SATISFIED WITH THERE SERVICE';
        document.getElementById('name3').innerHTML = 'HASIB HOSSAIN';
        document.getElementById('address3').innerHTML = 'TEJGAON, DHAKA';
        document.getElementById('review3').innerHTML = 'SO SATISFIED WITH THERE SERVICE';
    };
    </script>