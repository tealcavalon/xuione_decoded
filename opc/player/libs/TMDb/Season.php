<?php


class Season
{
	private $_data;
	private $_idTVShow;

	public function __construct($Ae757d5b26893bfe, $cd6041978f7e8712)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  7   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  7   RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2  9   ASSIGN_OBJ/136            ?0        ?1                   1:'_data'           	;0
		3  9   OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  10  FETCH_OBJ_W/85            $3=       ?4414262             2:'_data'           	;0
		5  10  ASSIGN_DIM/147            ?2        $3                   3:'tvshow_id'       	;0
		6  10  OP_DATA/137               ?0        16?1                 ?0                  	;0
		7  11  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  14  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  14  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  14  RETURN/62                 ?0        $1                   ?0                  	;0
		3  15  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  18  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  18  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  18  RETURN/62                 ?0        $1                   ?0                  	;0
		3  19  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTVShowID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  22  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  22  FETCH_DIM_R/81            $1=       $0                   1:'tvshow_id'       	;0
		2  22  RETURN/62                 ?0        $1                   ?0                  	;0
		3  23  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getSeasonNumber()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  26  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  26  FETCH_DIM_R/81            $1=       $0                   1:'season_number'   	;0
		2  26  RETURN/62                 ?0        $1                   ?0                  	;0
		3  27  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getNumEpisodes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  30  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'count'           	;1
		1  30  FETCH_OBJ_FUNC_ARG/94     $0=       ?1                   2:'_data'           	;1
		2  30  FETCH_DIM_FUNC_ARG/93     $1=       $0                   3:'episodes'        	;1
		3  30  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		4  30  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5  30  RETURN/62                 ?0        $2                   ?0                  	;0
		6  31  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function getEpisode($ccbec99512a46f53)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  32  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  34  NEW/68                    $1=       0:'Episode'          ?192                	;1
		2  34  FETCH_OBJ_FUNC_ARG/94     $2=       ?1661233336          2:'_data'           	;1
		3  34  FETCH_DIM_FUNC_ARG/93     $3=       $2                   3:'episodes'        	;1
		4  34  FETCH_DIM_FUNC_ARG/93     $4=       $3                   16?0                	;1
		5  34  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		6  34  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		7  34  RETURN/62                 ?0        $1                   ?0                  	;0
		8  35  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function getEpisodes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  38  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  39  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2  39  FETCH_DIM_R/81            $4=       $3                   2:'episodes'        	;0
		3  39  FE_RESET_R/77             $5=       $4                   ?14                 	;0
		4  39  FE_FETCH_R/78             ?0        $5                   16?1                	;14	>>14	<<13
		5  40  NEW/68                    $7=       3:'Episode'          ?192                	;2
		6  40  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7  40  INIT_METHOD_CALL/112      ?0        ?1668248800          5:'getTVShowID'     	;0
		8  40  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		9  40  SEND_VAR_NO_REF_EX/50     ?96       $8                   ?2                  	;0
		10 40  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		11 40  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		12 40  OP_DATA/137               ?0        $7                   ?0                  	;0
		13 41  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		14 41  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		15 44  RETURN/62                 ?0        16?0                 ?0                  	;0
		16 45  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  48  FETCH_OBJ_R/82            $0=       ?1668248992          0:'_data'           	;0
		1  48  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2  48  RETURN/62                 ?0        $1                   ?0                  	;0
		3  49  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getAirDate()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  52  FETCH_OBJ_R/82            $0=       ?1668248992          0:'_data'           	;0
		1  52  FETCH_DIM_R/81            $1=       $0                   1:'air_date'        	;0
		2  52  RETURN/62                 ?0        $1                   ?0                  	;0
		3  53  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  54  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  56  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  56  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  56  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  56  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  56  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  56  FETCH_OBJ_R/82            $4=       ?1661231416          2:'_data'           	;0	<<2
		7  56  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  56  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  56  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 57  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  60  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  60  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2  60  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  60  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  60  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  60  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  60  RETURN/62                 ?0        $2                   ?0                  	;0
		7  61  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   NOP/0                     ?0        ?0                   ?0                  	;0
1  63  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>