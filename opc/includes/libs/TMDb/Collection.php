<?php


/**
 * 	This class handles all the data you can get from a Collection
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class Collection
{
	private $_data;

	/**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of a Collection
     */
	public function __construct($data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  26  ASSIGN_OBJ/136            ?0        ?2670195328          0:'_data'           	;0
		2  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  27  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Collection's name
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
     *  Get the Collection's id
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
     *  Get the Collection's overview
     *
     *  @return string
     */
	public function getOverview()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  57  FETCH_DIM_R/81            $1=       $0                   1:'overview'        	;0
		2  57  RETURN/62                 ?0        $1                   ?0                  	;0
		3  58  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Collection's poster
     *
     *  @return string
     */
	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  66  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  66  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2  66  RETURN/62                 ?0        $1                   ?0                  	;0
		3  67  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Collection's backdrop
     *
     *  @return string
     */
	public function getBackdrop()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  75  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  75  FETCH_DIM_R/81            $1=       $0                   1:'backdrop_path'   	;0
		2  75  RETURN/62                 ?0        $1                   ?0                  	;0
		3  76  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     *  Get the Collection's Movies
     *
     *  @return Movie[]
     */
	public function getMovies()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  84  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1  86  FETCH_OBJ_R/82            $3=       ?4388664             1:'_data'           	;0
		2  86  FETCH_DIM_R/81            $4=       $3                   2:'parts'           	;0
		3  86  FE_RESET_R/77             $5=       $4                   ?11                 	;0
		4  86  FE_FETCH_R/78             ?0        $5                   16?1                	;11	>>11	<<10
		5  87  NEW/68                    $7=       3:'Movie'            ?96                 	;1
		6  87  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7  87  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		8  87  ASSIGN_DIM/147            ?4        16?0                 ?4431760            	;0
		9  87  OP_DATA/137               ?0        $7                   ?0                  	;0
		10 87  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		11 87  FE_FREE/127               ?0        $5                   ?0                  	;0	<<3
		12 90  RETURN/62                 ?0        16?0                 ?0                  	;0
		13 91  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
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
		0   100  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1   101  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2   101  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   101  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4   101  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5   101  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6   101  FETCH_OBJ_R/82            $4=       ?1667550216          2:'_data'           	;0	<<2
		7   101  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8   101  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9   101  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10  102  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   104  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>