<?php


class Episode
{
	private $_data;

	public function __construct($Ae757d5b26893bfe, $cd6041978f7e8712)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  6   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  6   RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2  8   ASSIGN_OBJ/136            ?0        ?1660906584          1:'_data'           	;0
		3  8   OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  9   FETCH_OBJ_W/85            $3=       ?4414262             2:'_data'           	;0
		5  9   ASSIGN_DIM/147            ?2        $3                   3:'tvshow_id'       	;0
		6  9   OP_DATA/137               ?0        16?1                 ?0                  	;0
		7  10  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  13  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  13  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  13  RETURN/62                 ?0        $1                   ?0                  	;0
		3  14  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  17  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  17  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  17  RETURN/62                 ?0        $1                   ?0                  	;0
		3  18  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTVShowID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  21  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  21  FETCH_DIM_R/81            $1=       $0                   1:'tvshow_id'       	;0
		2  21  RETURN/62                 ?0        $1                   ?0                  	;0
		3  22  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getSeasonNumber()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  25  FETCH_DIM_R/81            $1=       $0                   1:'season_number'   	;0
		2  25  RETURN/62                 ?0        $1                   ?0                  	;0
		3  26  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getEpisodeNumber()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  29  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  29  FETCH_DIM_R/81            $1=       $0                   1:'episode_number'  	;0
		2  29  RETURN/62                 ?0        $1                   ?0                  	;0
		3  30  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getOverview()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  33  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  33  FETCH_DIM_R/81            $1=       $0                   1:'overview'        	;0
		2  33  RETURN/62                 ?0        $1                   ?0                  	;0
		3  34  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getStill()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  37  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  37  FETCH_DIM_R/81            $1=       $0                   1:'still_path'      	;0
		2  37  RETURN/62                 ?0        $1                   ?0                  	;0
		3  38  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getAirDate()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  41  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  41  FETCH_DIM_R/81            $1=       $0                   1:'air_date'        	;0
		2  41  RETURN/62                 ?0        $1                   ?0                  	;0
		3  42  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getVoteAverage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  45  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  45  FETCH_DIM_R/81            $1=       $0                   1:'vote_average'    	;0
		2  45  RETURN/62                 ?0        $1                   ?0                  	;0
		3  46  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getVoteCount()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  49  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  49  FETCH_DIM_R/81            $1=       $0                   1:'vote_count'      	;0
		2  49  RETURN/62                 ?0        $1                   ?0                  	;0
		3  50  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function get($bfaffd59f038b138)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  51  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  53  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  53  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  53  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  53  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  53  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  53  FETCH_OBJ_R/82            $4=       ?1661232448          2:'_data'           	;0	<<2
		7  53  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  53  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  53  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 54  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  57  FETCH_OBJ_FUNC_ARG/94     $0=       ?2670193888          2:'_data'           	;1
		2  57  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  57  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  57  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  57  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  57  RETURN/62                 ?0        $2                   ?0                  	;0
		7  58  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   NOP/0                     ?0        ?0                   ?0                  	;0
1  60  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>