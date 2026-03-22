<?php


/**
 * 	This class handles all the data you can get from a Role
 *
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
class Role
{
	private $_data;

	/**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of a Role
     */
	protected function __construct($data, $ipPerson)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  25  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  25  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  26  ASSIGN_OBJ/136            ?0        ?1669234768          0:'_data'           	;0
		3  26  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  27  FETCH_OBJ_W/85            $3=       ?4414262             1:'_data'           	;0
		5  27  ASSIGN_DIM/147            ?2        $3                   2:'person_id'       	;0
		6  27  OP_DATA/137               ?0        16?1                 ?0                  	;0
		7  28  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Role's character
     *
     *  @return string
     */
	public function getCharacter()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  40  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  40  FETCH_DIM_R/81            $1=       $0                   1:'character'       	;0
		2  40  RETURN/62                 ?0        $1                   ?0                  	;0
		3  41  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/** 
     *  Get the Movie's poster
     *
     *  @return string
     */
	public function getPoster()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  49  FETCH_OBJ_R/82            $0=       ?4381411             0:'_data'           	;0
		1  49  FETCH_DIM_R/81            $1=       $0                   1:'poster_path'     	;0
		2  49  RETURN/62                 ?0        $1                   ?0                  	;0
		3  50  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
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
		0  59  RECV_INIT/64              16?0=     ?1                   0:''                	;0
		1  60  ISSET_ISEMPTY_CV/197      #1=       16?0                 ?0                  	;16777216
		2  60  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3  60  FETCH_OBJ_R/82            $2=       ?2670193920          1:'_data'           	;0
		4  60  QM_ASSIGN/22              #3=       $2                   ?0                  	;0
		5  60  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		6  60  FETCH_OBJ_R/82            $4=       ?1667549048          2:'_data'           	;0	<<2
		7  60  FETCH_DIM_R/81            $5=       $4                   16?0                	;0
		8  60  QM_ASSIGN/22              #3=       $5                   ?0                  	;0
		9  60  RETURN/62                 ?0        #3                   ?0                  	;0	<<5
		10 61  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  12  NOP/0                     ?0        ?0                   ?0                  	;0
1  64  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>