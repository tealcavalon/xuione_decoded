<?php


class TVShowRole
{
	private $_data;

	public function __construct($Ae757d5b26893bfe, $Bb6efcdf5168c97c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  6   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  6   RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  8   ASSIGN_OBJ/136            ?0        ?1660907104          0:'_data'           	;0
		3  8   OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  9   INIT_STATIC_METHOD_CALL/113 ?0        ?514                 ?1660129320         	;2
		5  9   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6  9   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		7  9   DO_FCALL/60               ?1        ?0                   ?0                  	;0
		8  10  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getTVShowName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  13  FETCH_OBJ_R/82            $0=       ?2670193728          0:'_data'           	;0
		1  13  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  13  RETURN/62                 ?0        $1                   ?0                  	;0
		3  14  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTVShowID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  17  FETCH_OBJ_R/82            $0=       ?2670193728          0:'_data'           	;0
		1  17  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  17  RETURN/62                 ?0        $1                   ?0                  	;0
		3  18  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTVShowOriginalTitle()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  21  FETCH_OBJ_R/82            $0=       ?2670193728          0:'_data'           	;0
		1  21  FETCH_DIM_R/81            $1=       $0                   1:'original_name'   	;0
		2  21  RETURN/62                 ?0        $1                   ?0                  	;0
		3  22  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getTVShowFirstAirDate()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  FETCH_OBJ_R/82            $0=       ?2670193728          0:'_data'           	;0
		1  25  FETCH_DIM_R/81            $1=       $0                   1:'first_air_date'  	;0
		2  25  RETURN/62                 ?0        $1                   ?0                  	;0
		3  26  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  29  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  29  FETCH_OBJ_FUNC_ARG/94     $0=       ?2670194050          2:'_data'           	;1
		2  29  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  29  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  29  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  29  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  29  RETURN/62                 ?0        $2                   ?0                  	;0
		7  30  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   FETCH_CLASS/109           $0=       ?0                   0:'Role'            	;0
1  3   DECLARE_INHERITED_CLASS/140 $1=       2:'tvshowrole'       $0                  	;4294967295
2  32  NOP/0                     ?0        4:1                  ?0                  	;4294967295
*/

?>