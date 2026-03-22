<?php


/**
 *  This class handles all the data you can get from the api Configuration
 *
 *  @author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 *  @version 0.1
 *  @date 20/01/2015
 *  @link https://github.com/Alvaroctal/TMDB-PHP-API
 *  @copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class APIConfiguration
{
	private $_data;

	/**
     *  Construct Class
     *
     *  @param array $data An array with the data of a Configuration
     */
	public function __construct($data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  26  ASSIGN_OBJ/136            ?0        ?2670194176          0:'_data'           	;0
		2  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  27  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Configuration's base URL for images
     *
     *  @return string
     */
	public function getImageBaseURL()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  39  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1  39  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  39  FETCH_DIM_R/81            $2=       $1                   2:'base_url'        	;0
		3  39  RETURN/62                 ?0        $2                   ?0                  	;0
		4  40  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Configuration's secure base URL for images
     *
     *  @return string
     */
	public function getSecureImageBaseURL()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  48  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1  48  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  48  FETCH_DIM_R/81            $2=       $1                   2:'secure_base_url' 	;0
		3  48  RETURN/62                 ?0        $2                   ?0                  	;0
		4  49  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Configuration's list of sizes for backdrops
     *
     *  @return string[]
     */
	public function getBackdropSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1  57  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  57  FETCH_DIM_R/81            $2=       $1                   2:'backdrop_sizes'  	;0
		3  57  RETURN/62                 ?0        $2                   ?0                  	;0
		4  58  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Configuration's list of sizes for logos
     *
     *  @return string[]
     */
	public function getLogoSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  66  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1  66  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  66  FETCH_DIM_R/81            $2=       $1                   2:'logo_sizes'      	;0
		3  66  RETURN/62                 ?0        $2                   ?0                  	;0
		4  67  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Configuration's list of sizes for posters
     *
     *  @return string[]
     */
	public function getPosterSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  75  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1  75  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  75  FETCH_DIM_R/81            $2=       $1                   2:'poster_sizes'    	;0
		3  75  RETURN/62                 ?0        $2                   ?0                  	;0
		4  76  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Configuration's list of sizes for profiles
     *
     *  @return string[]
     */
	public function getProfileSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  84  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1  84  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  84  FETCH_DIM_R/81            $2=       $1                   2:'profile_sizes'   	;0
		3  84  RETURN/62                 ?0        $2                   ?0                  	;0
		4  85  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Configuration's list of sizes for stills
     *
     *  @return string[]
     */
	public function getStillSizes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  93  FETCH_OBJ_R/82            $0=       ?0                   0:'_data'           	;0
		1  93  FETCH_DIM_R/81            $1=       $0                   1:'images'          	;0
		2  93  FETCH_DIM_R/81            $2=       $1                   2:'still_sizes'     	;0
		3  93  RETURN/62                 ?0        $2                   ?0                  	;0
		4  94  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get Generic.<br>
     *  Get a item of the array, you should not get used to use this, better use specific get's.
     *
     *  @param string $item The item of the $data array you want
     *  @return array
     */
	public function get($item)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   103  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   104  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2   104  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   104  FETCH_OBJ_R/82            $2=       ?2670193856          1:'_data'           	;0
		4   104  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5   104  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6   104  FETCH_OBJ_R/82            $4=       ?1667551600          2:'_data'           	;0	<<2
		7   104  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8   104  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9   104  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10  105  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the JSON representation of the Configuration
     *
     *  @return string
     */
	public function getJSON()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   117  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1   117  FETCH_OBJ_FUNC_ARG/94     $0=       ?4430313             2:'_data'           	;1
		2   117  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   117  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4   117  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5   117  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   117  RETURN/62                 ?0        $2                   ?0                  	;0
		7   118  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   120  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>