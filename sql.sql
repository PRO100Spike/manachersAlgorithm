/*Задание 1*/
SELECT
*
FROM
  public.category
WHERE parent_category_id IS NULL AND name LIKE 'авто%'

/*Задание 2*/
SELECT * FROM category
WHERE id NOT IN (
	SELECT parent_category_id
	FROM category
	WHERE parent_category_id <> 0
	GROUP BY parent_category_id HAVING count(*)  > 3)
ORDER BY id;


/*Задание 3*/
SELECT *
    FROM category AS cat
    LEFT JOIN (
        SELECT DISTINCT parent_category_id AS parent
            FROM category
    ) AS sub ON cat.id = sub.parent
    WHERE sub.parent IS NULL