<?php
/*categoryProcess.php*/
$query = "SELECT * FROM fv_category
                  ORDER BY catName";
$categories = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($categories);
$categoryCount = 0;
for ($i=1; $i<=$numRecords; $i++)
{
    $row = mysqli_fetch_array($categories, MYSQLI_ASSOC);
    $currentCatName = $row['catName'];
    $prodCatCode = urlencode($row['catCode']);
    $categoryURL = "pages/catalog.php?categoryCode=$prodCatCode";
    echo   "<li class='w3-button w3-circle w3-blue'>
      <a href='$categoryURL '>$currentCatName</a></li>\r\n ";  
    $categoryCount++;
  
    if( $categoryCount >= $numRecords/2 ){
        echo "</ul></td>\r\n<td><tl>";
        $categoryCount=0;   
      
    }
  
}
echo
"</ol></li></ul></td></tr></table>";
mysqli_close($db);
