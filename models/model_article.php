<?php

class model_article extends Model {

    function __construct() {
        parent::__construct();
    }

    function articleInfo($id_articles) {
        $sql = "SELECT * FROM tbl_articles WHERE id=?";
        $data = [$id_articles];
        $article_fetchAll = $this->doSELECT($sql, $data);
        $article_fetch = $this->doSELECT($sql, $data, 1);
        return ['article_fetchAll' => $article_fetchAll, 'article_fetch' => $article_fetch];
    }

    function articlesCategorize() {
        $sql = "SELECT * FROM tbl_option WHERE setting='limit_articles' ";
        $result = $this->doSELECT($sql, [], 1);
        $limit_article = $result['value'];
        $sql = "SELECT * FROM tbl_articles limit" . $limit_article . " ";
        $result = $this->doSELECT($sql);
        return $result;
    }

    function mostView() {
        $sql = "SELECT * FROM tbl_option WHERE setting='mostView' ";
        $result = $this->doSELECT($sql, [], 1);
        $limit_article = $result['value'];
        $sql = "SELECT * FROM tbl_articles order by viewd desc limit " . $limit_article . "  ";
        $result = $this->doSELECT($sql);
        return $result;
    }

    function newArticle() {
        $sql = "SELECT * FROM tbl_option WHERE setting='newArticle' ";
        $result = $this->doSELECT($sql, [], 1);
        $limit_article = $result['value'];
        $sql = "SELECT * FROM tbl_articles order by id desc limit " . $limit_article . "  ";
        $result = $this->doSELECT($sql);
        return $result;
    }

    function commentParameter($id_articles, $id_articles_category) {
        $sql = "SELECT * FROM tbl_comment_parameter WHERE id_articles_category=?";
        $titel = $this->doSELECT($sql, [$id_articles_category]);


        $sql2 = "SELECT * FROM tbl_comment WHERE id_articles=?";
        $result2 = $this->doSELECT($sql2, [$id_articles]);

        $scores_total = [];
        foreach ($result2 as $value) {
            $parameter = $value['parameter'];
            $parameter_unserialize = unserialize($parameter);
            foreach ($parameter_unserialize as $key => $val) {
                if (!isset($scores_total[$key])) {
                    $scores_total[$key] = 0;
                }
                $scores_total[$key] = $scores_total[$key] + $val;
            }
        }
        $total_comment = sizeof($result2);
        foreach ($scores_total as $key => $val) {
            $val = $val / $total_comment;
            $scores_total[$key] = $val;
        }
        return ['titel' => $titel, 'scores_total' => $scores_total];
    }

    function comment($id_articles, $id_articles_category) {
        $sql = "SELECT * FROM tbl_comment WHERE id_articles=? AND id_articles_category=?";
        $data = [$id_articles, $id_articles_category];
        $result = $this->doSELECT($sql, $data);
        return $result;
    }

}
