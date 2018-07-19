<?php 
include_once('mySqlConn.php');

class manipulaData extends  mySqlConn
{
	
protected $sql, $table, $campos, $dados, $status, $campoId, $valorId, $valor, $inicio, $maximo;
protected $campo1, $campo2, $campo3, $campo4;

public function setCamposExtras($c){
    $this->campo1 = $c[0];
    $this->campo2 = $c[1];
    $this->campo3 = $c[2];
    $this->campo4 = $c[3];

}

public function setTable($t) {
		$this->table = $t;
	}
	
	
	public function setInicio($t) {
		$this->inicio = $t;
	}
	public function setFim($t) {
		$this->maximo = $t;
	}

public function setCampos($c) {
		$this->campos = $c;
	}

	public function setDados($d) {
		$this->dados = $d;
	}

	public function setCampoId($ci) {
		$this->campoId = $ci;
	}
	
public function setValorId($ci) {
		$this->valorId = $ci;
	}

	public function setStatus($s){
		$this->status = $s;
	}
	public function setValor($vi){
		$this->valor = $vi;
	}

	public function insert() {
	  $this->sql = "INSERT INTO $this->table ($this->campos) VALUES ($this->dados) ";
	     return self::execSQL($this->sql);	
		
	}
	
	
	public function getList() {
		 $this->sql = "SELECT * FROM $this->table ";
		return self::execSQL ( $this->sql );
		}

		public function getList1() {
		  $this->sql = "SELECT * FROM $this->table  WHERE $this->campoId  = $this->valorId";
		return self::execSQL ( $this->sql );
		}

	public function getListData() {
		 $this->sql = "SELECT $this->campos FROM $this->table";
		return self::execSQL ( $this->sql );
		}
  //Função Luiz Filipe (Salim)
	public function getLF() {
		 $this->sql = "SELECT COUNT(*) $this->campos FROM $this->table";
		return self::execSQL ( $this->sql );
		}

	public function getLF1() {
		 $this->sql = "SELECT COUNT(*) as ativos FROM $this->table WHERE $this->campoId  = $this->valorId";
		return self::execSQL ( $this->sql );
		}

public function getListEditar() {
	   $this->sql = "SELECT * FROM $this->table  WHERE $this->campoId  = $this->valorId  ";

		//echo $this->sql;
		return self::execSQL ( $this->sql );
		}


		public function getListPesquisa() {
			$this->sql = "SELECT * FROM $this->table  WHERE $this->campoId  = $this->valorId ";
		return self::execSQL ( $this->sql );
		}


       	public function getBuscaPaginacao() {
			
			           
			$this->sql = "SELECT * FROM $this->table  WHERE $this->campos  LIKE '%$this->dados%' LIMIT $this->inicio, $this->maximo";
		return self::execSQL ( $this->sql );
		}

	public function getPaginacao() {
			
			           
		$this->sql = "SELECT * FROM $this->table  WHERE $this->campos  LIKE '%$this->dados%'";
		//echo $this->sql;
		return self::execSQL ( $this->sql );
		}

	public function update() {
		 $this->sql = "UPDATE $this->table SET $this->campos  WHERE $this->campoId = $this->valorId ";
	     return self::execSQL($this->sql);
		
	}

	public function delete() {
	   $this->sql = "DELETE FROM  $this->table WHERE $this->campoId = $this->valorId ";
	     return self::execSQL($this->sql)	;
		
	}
	
	public function ultimoID() {
           $this->sql = "SELECT max($this->campos) as ultimo FROM $this->table ORDER BY $this->campos DESC LIMIT 1";
		return self::execSQL ( $this->sql );
	}


	public function getVerifica(){
		 $this->sql = "SELECT $this->campos FROM $this->table WHERE  $this->dados = $this->valor AND $this->campoId = $this->status";
		 return self::execSQL($this->sql);

    }

    //funções do thominhas no framework do faguin, heheh...

    public function getListDecresc() {
        $this->sql = "SELECT * FROM $this->table ORDER BY id_usuario DESC";
        //echo $this->sql;
        return self::execSQL ( $this->sql );
    }

    public function get_decresc() {
        $this->sql = "SELECT * FROM $this->table  WHERE $this->campos  LIKE '%$this->dados%' ORDER BY id_cad DESC";
        return self::execSQL ( $this->sql );
    }

    public function get_decresc_srch() {
		$this->sql = "SELECT * FROM $this->table  WHERE $this->campos  LIKE '%$this->dados%' ORDER BY id_cad DESC LIMIT $this->inicio, $this->maximo";
        return self::execSQL ( $this->sql );
    }

    // funções da Thatá ;* 

    public function get_Thata() {
        $this->sql = "SELECT * FROM $this->table  WHERE $this->campos  LIKE '%$this->dados%' ORDER BY id_rem DESC";
        return self::execSQL ( $this->sql );
    }


}
?>