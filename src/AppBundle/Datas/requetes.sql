SELECT a.*, s.id AS sectionId FROM article a 
	INNER JOIN article_has_section h ON h.article_id = a.id
    INNER JOIN section s ON s.id=h.section_id
WHERE s.id=5;							;