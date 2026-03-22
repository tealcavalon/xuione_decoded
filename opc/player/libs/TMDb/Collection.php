<?php


class Collection
{
	private $_data;

	public function __construct($Ae757d5b26893bfe)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0 6  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1 8  ASSIGN_OBJ/136            ?0        ?2670195328          0:'_data'           	;0
		2 8  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3 9  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  12  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  12  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  12  RETURN/62                 ?0        $1                   ?0                  	;0
		3  13  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  16  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  16  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  16  RETURN/62                 ?0        $1                   ?0                  	;0
		3  17  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getOverview()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  20  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  20  FETCH_DIM_R/81            $1=       $0                   1:'overview'        	;0
		2  20  RETURN/62                 ?0        $1                   ?0                  	;0
		3  21  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  24  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  24  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2  24  RETURN/62                 ?0        $1                   ?0                  	;0
		3  25  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getBackdrop()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  28  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  28  FETCH_DIM_R/81            $1=       $0                   1:'backdrop_path'   	;0
		2  28  RETURN/62                 ?0        $1                   ?0                  	;0
		3  29  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getMovies()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  32  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  33  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2  33  FETCH_DIM_R/81            $4=       $3                   2:'parts'           	;0
		3  33  FE_RESET_R/77             $5=       $4                   ?11                 	;0
		4  33  FE_FETCH_R/78             ?0        $5                   16?1                	;11	>>11	<<10
		5  34  NEW/68                    $7=       3:'Movie'            ?96                 	;1
		6  34  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7  34  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		8  34  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		9  34  OP_DATA/137               ?0        $7                   ?0                  	;0
		10 35  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		11 35  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		12 38  RETURN/62                 ?0        16?0                 ?0                  	;0
		13 39  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  40  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  42  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  42  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  42  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  42  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  42  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  42  FETCH_OBJ_R/82            $4=       ?1661230088          2:'_data'           	;0	<<2
		7  42  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  42  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  42  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 43  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   NOP/0                     ?0        ?0                   ?0                  	;0
1  45  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>