<?php
function get_catagories()
{
  $sql = " SELECT 
    c.id AS category_id,
    c.namecategories AS category_name,
    sc.id AS sub_category_id,
    sc.nameSub AS sub_category_name
FROM 
    categories c
JOIN 
    sub_categories sc ON c.id = sc.categories_id
ORDER BY 
    c.namecategories, sc.nameSub
    ASC
  ";
  return pdo_query($sql);
}
