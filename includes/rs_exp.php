<?
 
class RSExp {
 
    function equate($xp){
        return floor($xp + 300 * pow(2, $xp / 7));
    }
 
    function level_to_xp($level){
        $xp = 0;
 
        for ($i = 1; $i < $level; $i++)
            $xp += $this->equate($i);
 
        return floor($xp / 4);
    }
 
    function xp_to_level($xp){
        $level = 1;
 
        while ($this->level_to_xp($level) < $xp)
            $level++;
 
        return $level;
    }
 
}
 
?>