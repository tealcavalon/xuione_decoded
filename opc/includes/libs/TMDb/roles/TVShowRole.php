<?php


/**
 * 	This class handles all the data you can get from a TVShowRole
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class TVShowRole
{
	private $_data;

	/**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of a TVShowRole
     */
	public function __construct($data, $idPerson)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  25  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  26  ASSIGN_OBJ/136            ?0        ?1669222520          0:'_data'           	;0
		3  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  28  INIT_STATIC_METHOD_CALL/113 ?0        ?514                 ?1669222920         	;2
		5  28  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6  28  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		7  28  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		8  29  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the TVShow's title of the role
     *
     *  @return string
     */
	public function getTVShowName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  41  FETCH_OBJ_R/82            $0=       ?2670193728          0:'_data'           	;0
		1  41  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  41  RETURN/62                 ?0        $1                   ?0                  	;0
		3  42  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the TVShow's id
     *
     *  @return int
     */
	public function getTVShowID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  50  FETCH_OBJ_R/82            $0=       ?2670193728          0:'_data'           	;0
		1  50  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  50  RETURN/62                 ?0        $1                   ?0                  	;0
		3  51  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the TVShow's original title of the role
     *
     *  @return string
     */
	public function getTVShowOriginalTitle()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  59  FETCH_OBJ_R/82            $0=       ?2670193728          0:'_data'           	;0
		1  59  FETCH_DIM_R/81            $1=       $0                   1:'original_name'   	;0
		2  59  RETURN/62                 ?0        $1                   ?0                  	;0
		3  60  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the TVShow's release date of the role
     *
     *  @return string
     */
	public function getTVShowFirstAirDate()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  68  FETCH_OBJ_R/82            $0=       ?2670193728          0:'_data'           	;0
		1  68  FETCH_DIM_R/81            $1=       $0                   1:'first_air_date'  	;0
		2  68  RETURN/62                 ?0        $1                   ?0                  	;0
		3  69  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the JSON representation of the Episode
     *
     *  @return string
     */
	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  81  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1  81  FETCH_OBJ_FUNC_ARG/94     $0=       ?2670194050          2:'_data'           	;1
		2  81  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  81  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4  81  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5  81  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6  81  RETURN/62                 ?0        $2                   ?0                  	;0
		7  82  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  12  FETCH_CLASS/109           $0=       ?0                   0:'Role'            	;0
1  12  DECLARE_INHERITED_CLASS/140 $1=       2:'tvshowrole'       $0                  	;4294967295
2  84  NOP/0                     ?0        4:1                  ?0                  	;4294967295
*/

?>