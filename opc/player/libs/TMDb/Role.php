<?php


class Role
{
	private $_data;

	protected function __construct($Ae757d5b26893bfe, $Db2bde196b22f37f)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  6   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  6   RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  8   ASSIGN_OBJ/136            ?0        ?1660132400          0:'_data'           	;0
		3  8   OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  9   FETCH_OBJ_W/85            $3=       ?4414262             1:'_data'           	;0
		5  9   ASSIGN_DIM/147            ?2        $3                   2:'person_id'       	;0
		6  9   OP_DATA/137               ?0        16?1                 ?0                  	;0
		7  10  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getCharacter()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  13  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  13  FETCH_DIM_R/81            $1=       $0                   1:'character'       	;0
		2  13  RETURN/62                 ?0        $1                   ?0                  	;0
		3  14  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  17  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  17  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2  17  RETURN/62                 ?0        $1                   ?0                  	;0
		3  18  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  19  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  21  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  21  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  21  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  21  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  21  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  21  FETCH_OBJ_R/82            $4=       ?1661228920          2:'_data'           	;0	<<2
		7  21  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  21  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  21  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 22  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   NOP/0                     ?0        ?0                   ?0                  	;0
1  24  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>