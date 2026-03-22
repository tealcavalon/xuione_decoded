<?php


/**
 * 	This class handles all the data you can get from a Person
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class Person
{
	private $_data;

	/**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of the Person
     */
	public function __construct($data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  26  ASSIGN_OBJ/136            ?0        ?1669021560          0:'_data'           	;0
		2  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  27  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Person's name
     *
     *  @return string
     */
	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  39  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  39  FETCH_DIM_R/81            $1=       $0                   1:'name'            	;0
		2  39  RETURN/62                 ?0        $1                   ?0                  	;0
		3  40  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Person's id
     *
     *  @return int
     */
	public function getID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  48  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  48  FETCH_DIM_R/81            $1=       $0                   1:'id'              	;0
		2  48  RETURN/62                 ?0        $1                   ?0                  	;0
		3  49  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Person's profile image
     *
     *  @return string
     */
	public function getProfile()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  57  FETCH_DIM_R/81            $1=       $0                   1:'profile_path'    	;0
		2  57  RETURN/62                 ?0        $1                   ?0                  	;0
		3  58  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Person's birthday
     *
     *  @return string
     */
	public function getBirthday()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  66  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  66  FETCH_DIM_R/81            $1=       $0                   1:'birthday'        	;0
		2  66  RETURN/62                 ?0        $1                   ?0                  	;0
		3  67  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Person's place of birth
     *
     *  @return string
     */
	public function getPlaceOfBirth()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  75  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  75  FETCH_DIM_R/81            $1=       $0                   1:'place_of_birth'  	;0
		2  75  RETURN/62                 ?0        $1                   ?0                  	;0
		3  76  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Person's imdb id
     *
     *  @return string
     */
	public function getImbdID()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  84  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  84  FETCH_DIM_R/81            $1=       $0                   1:'imdb_id'         	;0
		2  84  RETURN/62                 ?0        $1                   ?0                  	;0
		3  85  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Person's popularity
     *
     *  @return int
     */
	public function getPopularity()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  93  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  93  FETCH_DIM_R/81            $1=       $0                   1:'popularity'      	;0
		2  93  RETURN/62                 ?0        $1                   ?0                  	;0
		3  94  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the Person's MovieRoles
     *
     *  @return MovieRole[]
     */
	public function getMovieRoles()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   102  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   104  FETCH_OBJ_R/82            $3=       ?1667552176          1:'_data'           	;0
		2   104  FETCH_DIM_R/81            $4=       $3                   2:'movie_credits'   	;0
		3   104  FETCH_DIM_R/81            $5=       $4                   3:'cast'            	;0
		4   104  FE_RESET_R/77             $6=       $5                   ?15                 	;0
		5   104  FE_FETCH_R/78             ?0        $6                   16?1                	;15	>>15	<<14
		6   105  NEW/68                    $8=       4:'MovieRole'        ?192                	;2
		7   105  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8   105  INIT_METHOD_CALL/112      ?0        ?1669160352          6:'getID'           	;0
		9   105  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		10  105  SEND_VAR_NO_REF_EX/50     ?96       $9                   ?2                  	;0
		11  105  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		12  105  ASSIGN_DIM/147            ?5        16?0                 ?2670193456         	;0
		13  105  OP_DATA/137               ?0        $8                   ?0                  	;0
		14  105  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		15  105  FE_FREE/127               ?0        $6                   ?0                  	;0	<<4
		16  108  RETURN/62                 ?0        16?0                 ?0                  	;0
		17  109  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the Person's TVShowRoles
     *
     *  @return TVShowRole[]
     */
	public function getTVShowRoles()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   117  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   119  FETCH_OBJ_R/82            $3=       ?1                   1:'_data'           	;0
		2   119  FETCH_DIM_R/81            $4=       $3                   2:'tv_credits'      	;0
		3   119  FETCH_DIM_R/81            $5=       $4                   3:'cast'            	;0
		4   119  FE_RESET_R/77             $6=       $5                   ?15                 	;0
		5   119  FE_FETCH_R/78             ?0        $6                   16?1                	;15	>>15	<<14
		6   120  NEW/68                    $8=       4:'TVShowRole'       ?192                	;2
		7   120  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		8   120  INIT_METHOD_CALL/112      ?0        ?1669160576          6:'getID'           	;0
		9   120  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		10  120  SEND_VAR_NO_REF_EX/50     ?96       $9                   ?2                  	;0
		11  120  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		12  120  ASSIGN_DIM/147            ?5        16?0                 ?2670193456         	;0
		13  120  OP_DATA/137               ?0        $8                   ?0                  	;0
		14  120  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		15  120  FE_FREE/127               ?0        $6                   ?0                  	;0	<<4
		16  123  RETURN/62                 ?0        16?0                 ?0                  	;0
		17  124  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
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
		0   133  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   134  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2   134  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   134  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4   134  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5   134  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6   134  FETCH_OBJ_R/82            $4=       ?1667552280          2:'_data'           	;0	<<2
		7   134  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8   134  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9   134  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10  135  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
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
		0   147  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'json_encode'     	;2
		1   147  FETCH_OBJ_FUNC_ARG/94     $0=       ?4294967040          2:'_data'           	;1
		2   147  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   147  FETCH_CONSTANT/99         #1=       ?0                   3:'JSON_PRETTY_PRINT'	;16
		4   147  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
		5   147  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   147  RETURN/62                 ?0        $2                   ?0                  	;0
		7   148  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   150  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>