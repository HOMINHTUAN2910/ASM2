<?php
function get_categoriesID($id)
{
  $sql = "SELECT * FROM categories where id = ?";

  return pdo_query_one($sql,  $id);
}

function get_subcategories($subid)
{
  $sql = "
    SELECT
        c.id AS category_id,
        c.namecategories ,
        sc.id AS subcategory_id,
        sc.nameSub 
    FROM
        categories c
    LEFT JOIN
        sub_categories sc ON c.id = sc.categories_id
    WHERE
        c.id = ?
    ORDER BY
        c.namecategories,   
        sc.nameSub ASC
    ";

  return pdo_query($sql, $subid);
}
