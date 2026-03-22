<?php


function C7cC2f0dd6f71Ebb($Cea68b43e2d6b34e)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  7   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  9   JMP/42                    ?0        ?12                  ?0                  	;0	>>12
	2  11  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_put_contents'	;2
	3  11  FETCH_CONSTANT/99         #3=       ?0                   3:'ARCHIVE_PATH'    	;16
	4  11  CONCAT/8                  #4=       #3                   16?0                	;0
	5  11  CONCAT/8                  #5=       #4                   6:'_.record'        	;0
	6  11  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
	7  11  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'getmypid'        	;0
	8  11  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	9  11  SEND_VAR_NO_REF_EX/50     ?96       $6                   ?2                  	;0
	10 11  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	11 12  GOTO/253                  ?0        ?85                  ?9                  	;0
	12 14  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'clearstatcache' 	;1	<<1
	13 14  SEND_VAL_EX/116           ?80       12:true              ?1                  	;0
	14 14  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
	15 15  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'file_exists'    	;1
	16 15  FETCH_CONSTANT/99         #9=       ?0                   15:'ARCHIVE_PATH'   	;16
	17 15  CONCAT/8                  #10=      #9                   16?0                	;0
	18 15  CONCAT/8                  #11=      #10                  18:'_.record'       	;0
	19 15  SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
	20 15  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	21 15  BOOL_NOT/13               #13=      $12                  ?0                  	;0
	22 15  JMPZ/43                   ?0        #13                  ?24                 	;0	>>24
	23 16  GOTO/253                  ?0        ?34                  ?19                 	;0
	24 18  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'intval'         	;1	<<22
	25 18  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'file_get_contents'	;1
	26 18  FETCH_CONSTANT/99         #14=      ?0                   24:'ARCHIVE_PATH'   	;16
	27 18  CONCAT/8                  #15=      #14                  16?0                	;0
	28 18  CONCAT/8                  #16=      #15                  27:'_.record'       	;0
	29 18  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
	30 18  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	31 18  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
	32 18  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	33 18  ASSIGN/38                 ?16       16?1                 $18                 	;0
	34 20  ISSET_ISEMPTY_CV/197      #20=      16?1                 ?0                  	;16777216
	35 20  JMPZ/43                   ?0        #20                  ?37                 	;0	>>37
	36 21  GOTO/253                  ?0        ?39                  ?28                 	;0
	37 23  GOTO/253                  ?0        ?48                  ?29                 	;0	<<35
	38 26  GOTO/253                  ?0        ?47                  ?30                 	;0
	39 28  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'shell_exec'     	;1
	40 28  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'intval'         	;1
	41 28  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	42 28  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	43 28  CONCAT/8                  #22=      35:'kill -9 `ps -ef | grep \'Record\\[' $21                 	;0
	44 28  CONCAT/8                  #23=      #22                  36:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;0
	45 28  SEND_VAL_EX/116           ?80       #23                  ?1                  	;0
	46 28  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
	47 30  GOTO/253                  ?0        ?2                   ?37                 	;0
	48 32  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'file_exists'    	;1
	49 32  CONCAT/8                  #25=      40:'/proc/'          16?1                	;0
	50 32  SEND_VAL_EX/116           ?80       #25                  ?1                  	;0
	51 32  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	52 32  BOOL_NOT/13               #27=      $26                  ?0                  	;0
	53 32  JMPZ/43                   ?0        #27                  ?55                 	;0	>>55
	54 33  GOTO/253                  ?0        ?38                  ?41                 	;0
	55 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'trim'           	;1	<<53
	56 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'file_get_contents'	;1
	57 35  ROPE_INIT/54              #29=      ?0                   46:'/proc/'         	;3
	58 35  ROPE_ADD/55               #29=      #29                  16?1                	;1
	59 35  ROPE_END/56               #28=      #29                  47:'/cmdline'       	;2
	60 35  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	61 35  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	62 35  SEND_VAR_NO_REF_EX/50     ?80       $31                  ?1                  	;0
	63 35  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
	64 35  ASSIGN/38                 ?30       16?2                 $32                 	;0
	65 36  ROPE_INIT/54              #35=      ?0                   48:'Record['        	;3
	66 36  ROPE_ADD/55               #35=      #35                  16?0                	;1
	67 36  ROPE_END/56               #34=      #35                  49:']'              	;2
	68 36  IS_EQUAL/17               #37=      16?2                 #34                 	;0
	69 36  JMPZ_EX/46                #37=      #37                  ?74                 	;0	>>74
	70 36  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'is_numeric'     	;1
	71 36  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	72 36  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	73 36  BOOL/52                   #37=      $38                  ?0                  	;0
	74 36  JMPZ_EX/46                #37=      #37                  ?77                 	;0	>>77	<<69
	75 36  IS_SMALLER/19             #39=      52:0                 16?1                	;0
	76 36  BOOL/52                   #37=      #39                  ?0                  	;0
	77 36  BOOL_NOT/13               #40=      #37                  ?0                  	;0	<<74
	78 36  JMPZ/43                   ?0        #40                  ?80                 	;0	>>80
	79 37  GOTO/253                  ?0        ?84                  ?53                 	;0
	80 39  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'posix_kill'     	;2	<<78
	81 39  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	82 39  SEND_VAL_EX/116           ?96       56:9                 ?2                  	;0
	83 39  DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
	84 41  GOTO/253                  ?0        ?38                  ?57                 	;0
	85 43  NOP/0                     ?0        58:NULL              ?0                  	;4294967295
	*/
}

function C79e45b9106CF57B($ce0840c647e1bbc7)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  49  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  51  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strtolower'      	;1
	2  51  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'preg_replace'    	;3
	3  51  SEND_VAL_EX/116           ?80       4:'/[^a-z0-9_]+/i'   ?1                  	;0
	4  51  SEND_VAL_EX/116           ?96       5:''                 ?2                  	;0
	5  51  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
	6  51  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	7  51  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
	8  51  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	9  51  RETURN/62                 ?0        $2                   ?0                  	;0
	10 52  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

function C483a3A59265139e($F647a429f8089f01)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  54  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  56  ASSIGN/38                 $7=       16?4                 0:array (
)         	;0
	2  56  ASSIGN/38                 $8=       16?3                 $7                  	;0
	3  56  ASSIGN/38                 $9=       16?2                 $8                  	;0
	4  56  ASSIGN/38                 ?3        16?1                 $9                  	;0
	5  57  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'array_keys'      	;1
	6  57  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	7  57  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	8  57  FE_RESET_R/77             $12=      $11                  ?25                 	;0
	9  57  FE_FETCH_R/78             ?0        $12                  16?5                	;25	>>25	<<24
	10 58  INIT_FCALL/61             ?0        ?128                 3:'c79e45b9106cf57b'	;1
	11 58  SEND_VAR/117              ?80       16?5                 ?1                  	;0
	12 58  DO_FCALL/60               $14=      ?0                   ?0                  	;0
	13 58  CONCAT/8                  #15=      4:'`'                $14                 	;0
	14 58  CONCAT/8                  #16=      #15                  5:'`'               	;0
	15 58  ASSIGN_DIM/147            ?6        16?2                 ?4583821            	;0
	16 58  OP_DATA/137               ?0        #16                  ?0                  	;0
	17 59  INIT_FCALL/61             ?0        ?128                 6:'c79e45b9106cf57b'	;1
	18 59  SEND_VAR/117              ?80       16?5                 ?1                  	;0
	19 59  DO_FCALL/60               $18=      ?0                   ?0                  	;0
	20 59  CONCAT/8                  #19=      7:'`'                $18                 	;0
	21 59  CONCAT/8                  #20=      #19                  8:'` = ?'           	;0
	22 59  ASSIGN_DIM/147            ?10       16?1                 ?0                  	;0
	23 59  OP_DATA/137               ?0        #20                  ?0                  	;0
	24 60  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
	25 60  FE_FREE/127               ?0        $12                  ?0                  	;0	<<8
	26 63  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'array_values'    	;1
	27 63  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	28 63  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	29 63  FE_RESET_R/77             $22=      $21                  ?49                 	;0
	30 63  FE_FETCH_R/78             ?0        $22                  16?6                	;49	>>49	<<48
	31 64  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'is_array'       	;1
	32 64  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	33 64  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	34 64  BOOL_NOT/13               #24=      $23                  ?0                  	;0
	35 64  JMPZ/43                   ?0        #24                  ?38                 	;0	>>38
	36 65  NOP/0                     ?0        ?0                   ?0                  	;1
	37 65  GOTO/253                  ?0        ?44                  ?13                 	;0
	38 67  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_encode'    	;2	<<35
	39 67  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	40 67  FETCH_CONSTANT/99         #25=      ?0                   16:'JSON_UNESCAPED_UNICODE'	;16
	41 67  SEND_VAL_EX/116           ?96       #25                  ?2                  	;0
	42 67  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	43 67  ASSIGN/38                 ?20       16?6                 $26                 	;0
	44 69  ASSIGN_DIM/147            ?21       16?3                 ?2670194432         	;0
	45 69  OP_DATA/137               ?0        19:'?'               ?0                  	;0
	46 70  ASSIGN_DIM/147            ?22       16?4                 ?0                  	;0
	47 70  OP_DATA/137               ?0        16?6                 ?0                  	;0
	48 71  JMP/42                    ?0        ?30                  ?0                  	;0	>>30
	49 71  FE_FREE/127               ?0        $22                  ?0                  	;0	<<29
	50 74  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'implode'        	;2
	51 74  SEND_VAL_EX/116           ?80       22:','               ?1                  	;0
	52 74  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	53 74  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
	54 74  INIT_ARRAY/71             #31=      $30                  23:'placeholder'    	;18
	55 74  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'implode'        	;2
	56 74  SEND_VAL_EX/116           ?80       26:','               ?1                  	;0
	57 74  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	58 74  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
	59 74  ADD_ARRAY_ELEMENT/72      #31=      $32                  27:'columns'        	;0
	60 74  ADD_ARRAY_ELEMENT/72      #31=      16?4                 28:'data'           	;0
	61 74  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'implode'        	;2
	62 74  SEND_VAL_EX/116           ?80       31:','               ?1                  	;0
	63 74  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	64 74  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	65 74  ADD_ARRAY_ELEMENT/72      #31=      $33                  32:'update'         	;0
	66 74  RETURN/62                 ?0        #31                  ?0                  	;0
	67 75  NOP/0                     ?0        33:NULL              ?0                  	;4294967295
	*/
}

function c73ed8D0B70CE12F($b5a93f3474101e1f, $ba2d146bb5a55097, $ed6a5662734f48dc)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   77   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   77   RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
	2   77   RECV_INIT/64              16?2=     ?3                   1:false             	;0
	3   79   BIND_GLOBAL/168           ?0        16?3                 2:'b62d6460eb33ea07'	;0
	4   80   ASSIGN/38                 ?0        16?4                 3:array (
)         	;0
	5   81   INIT_METHOD_CALL/112      ?0        16?3                 4:'query'           	;2
	6   81   SEND_VAL_EX/116           ?80       6:'SELECT `column_name`, `column_default`, `is_nullable`, `data_type` FROM `information_schema`.`columns` WHERE `table_schema` = (SELECT DATABASE()) AND `table_name` = ? ORDER BY `ordinal_position`;' ?1                  	;0
	7   81   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	8   81   DO_FCALL/60               ?1        ?0                   ?0                  	;0
	9   82   INIT_METHOD_CALL/112      ?0        16?3                 7:'get_rows'        	;0
	10  82   DO_FCALL/60               $9=       ?0                   ?0                  	;0
	11  82   FE_RESET_R/77             $10=      $9                   ?113                	;0
	12  82   FE_FETCH_R/78             ?0        $10                  16?5                	;113	>>113	<<112
	13  83   NOP/0                     ?0        ?0                   ?0                  	;1
	14  83   GOTO/253                  ?0        ?74                  ?9                  	;0
	15  85   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'in_array'       	;2
	16  85   FETCH_DIM_FUNC_ARG/93     $11=      16?5                 12:'data_type'      	;1
	17  85   SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
	18  85   SEND_VAL_EX/116           ?96       13:array (
  0 => 'int',
  1 => 'float',
  2 => 'tinyint',
  3 => 'double',
  4 => 'decimal',
  5 => 'smallint',
  6 => 'mediumint',
  7 => 'bigint',
  8 => 'bit',
) ?2                  	;0
	19  85   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	20  85   JMPZ/43                   ?0        $12                  ?23                 	;0	>>23
	21  86   NOP/0                     ?0        ?0                   ?0                  	;1
	22  86   GOTO/253                  ?0        ?27                  ?14                 	;0
	23  88   ASSIGN_DIM/147            ?6        16?5                 15:'column_default' 	;0	<<20
	24  88   OP_DATA/137               ?0        16:''                ?0                  	;0
	25  89   NOP/0                     ?0        ?0                   ?0                  	;1
	26  89   GOTO/253                  ?0        ?58                  ?17                 	;0
	27  91   ASSIGN_DIM/147            ?7        16?5                 18:'column_default' 	;0
	28  91   OP_DATA/137               ?0        19:0                 ?0                  	;0
	29  92   NOP/0                     ?0        ?0                   ?0                  	;1
	30  92   GOTO/253                  ?0        ?58                  ?20                 	;0
	31  94   FETCH_DIM_R/81            $15=      16?5                 21:'column_name'    	;0
	32  94   FETCH_DIM_R/81            $17=      16?5                 22:'column_default' 	;0
	33  94   ASSIGN_DIM/147            ?9        16?4                 $15                 	;0
	34  94   OP_DATA/137               ?0        $17                  ?0                  	;0
	35  96   NOP/0                     ?0        ?0                   ?0                  	;1
	36  96   GOTO/253                  ?0        ?72                  ?23                 	;0
	37  98   FETCH_DIM_R/81            $18=      16?5                 24:'column_name'    	;0
	38  98   ISSET_ISEMPTY_DIM_OBJ/115 #19=      16?1                 $18                 	;16777216
	39  98   JMPZ_EX/46                #19=      #19                  ?47                 	;0	>>47
	40  98   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'is_numeric'     	;1
	41  98   FETCH_DIM_R/81            $20=      16?5                 27:'column_name'    	;0
	42  98   FETCH_DIM_FUNC_ARG/93     $21=      16?1                 $20                 	;1
	43  98   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
	44  98   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
	45  98   BOOL_NOT/13               #23=      $22                  ?0                  	;0
	46  98   BOOL/52                   #19=      #23                  ?0                  	;0
	47  98   JMPZ_EX/46                #19=      #19                  ?53                 	;0	>>53	<<39
	48  98   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'is_null'        	;1
	49  98   FETCH_DIM_FUNC_ARG/93     $24=      16?5                 30:'column_default' 	;1
	50  98   SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
	51  98   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	52  98   BOOL/52                   #19=      $25                  ?0                  	;0
	53  98   JMPZ/43                   ?0        #19                  ?56                 	;0	>>56	<<47
	54  99   NOP/0                     ?0        ?0                   ?0                  	;1
	55  99   GOTO/253                  ?0        ?102                 ?31                 	;0
	56  101  NOP/0                     ?0        ?0                   ?0                  	;1	<<53
	57  101  GOTO/253                  ?0        ?95                  ?32                 	;0
	58  104  ASSIGN/38                 ?19       16?6                 33:true             	;0
	59  106  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'array_key_exists'	;2
	60  106  FETCH_DIM_FUNC_ARG/93     $27=      16?5                 36:'column_name'    	;1
	61  106  SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
	62  106  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	63  106  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	64  106  JMPZ/43                   ?0        $28                  ?67                 	;0	>>67
	65  107  NOP/0                     ?0        ?0                   ?0                  	;1
	66  107  GOTO/253                  ?0        ?37                  ?37                 	;0
	67  109  JMPZ/43                   ?0        16?2                 ?70                 	;0	>>70	<<64
	68  110  NOP/0                     ?0        ?0                   ?0                  	;1
	69  110  GOTO/253                  ?0        ?35                  ?38                 	;0
	70  112  NOP/0                     ?0        ?0                   ?0                  	;1	<<67
	71  112  GOTO/253                  ?0        ?31                  ?39                 	;0
	72  116  NOP/0                     ?0        ?0                   ?0                  	;1
	73  116  GOTO/253                  ?0        ?112                 ?40                 	;0
	74  118  FETCH_DIM_R/81            $29=      16?5                 41:'column_default' 	;0
	75  118  IS_EQUAL/17               #30=      $29                  42:'NULL'           	;0
	76  118  BOOL_NOT/13               #31=      #30                  ?0                  	;0
	77  118  JMPZ/43                   ?0        #31                  ?80                 	;0	>>80
	78  119  NOP/0                     ?0        ?0                   ?0                  	;1
	79  119  GOTO/253                  ?0        ?82                  ?43                 	;0
	80  121  ASSIGN_DIM/147            ?25       16?5                 44:'column_default' 	;0	<<77
	81  121  OP_DATA/137               ?0        45:NULL              ?0                  	;0
	82  123  ASSIGN/38                 ?26       16?6                 46:false            	;0
	83  124  FETCH_DIM_R/81            $34=      16?5                 47:'is_nullable'    	;0
	84  124  IS_EQUAL/17               #35=      $34                  48:'NO'             	;0
	85  124  JMPZ_EX/46                #35=      #35                  ?89                 	;0	>>89
	86  124  FETCH_DIM_R/81            $36=      16?5                 49:'column_default' 	;0
	87  124  BOOL_NOT/13               #37=      $36                  ?0                  	;0
	88  124  BOOL/52                   #35=      #37                  ?0                  	;0
	89  124  BOOL_NOT/13               #38=      #35                  ?0                  	;0	<<85
	90  124  JMPZ/43                   ?0        #38                  ?93                 	;0	>>93
	91  125  NOP/0                     ?0        ?0                   ?0                  	;1
	92  125  GOTO/253                  ?0        ?59                  ?50                 	;0
	93  127  NOP/0                     ?0        ?0                   ?0                  	;1	<<90
	94  127  GOTO/253                  ?0        ?15                  ?51                 	;0
	95  129  FETCH_DIM_R/81            $39=      16?5                 52:'column_name'    	;0
	96  129  FETCH_DIM_R/81            $41=      16?5                 53:'column_name'    	;0
	97  129  FETCH_DIM_R/81            $42=      16?1                 $41                 	;0
	98  129  ASSIGN_DIM/147            ?33       16?4                 $39                 	;0
	99  129  OP_DATA/137               ?0        $42                  ?0                  	;0
	100 130  NOP/0                     ?0        ?0                   ?0                  	;1
	101 130  GOTO/253                  ?0        ?110                 ?54                 	;0
	102 132  FETCH_DIM_R/81            $43=      16?5                 55:'column_name'    	;0
	103 132  JMPZ/43                   ?0        16?6                 ?107                	;0	>>107
	104 132  FETCH_DIM_R/81            $45=      16?5                 56:'column_default' 	;0
	105 132  QM_ASSIGN/22              #46=      $45                  ?0                  	;0
	106 132  JMP/42                    ?0        ?108                 ?0                  	;0	>>108
	107 132  QM_ASSIGN/22              #46=      57:NULL              ?0                  	;0	<<103
	108 132  ASSIGN_DIM/147            ?37       16?4                 $43                 	;0	<<106
	109 132  OP_DATA/137               ?0        #46                  ?0                  	;0
	110 134  NOP/0                     ?0        ?0                   ?0                  	;1
	111 134  GOTO/253                  ?0        ?72                  ?58                 	;0
	112 135  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
	113 135  FE_FREE/127               ?0        $10                  ?0                  	;0	<<11
	114 138  RETURN/62                 ?0        16?4                 ?0                  	;0
	115 139  NOP/0                     ?0        59:NULL              ?0                  	;4294967295
	*/
}

function cB24148cf9ab2A75($F48d5724f3b4ec96, $c68b76c7e42b19eb)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   150  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   150  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   152  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
	3   156  RETURN/62                 ?0        1:NULL               ?0                  	;0
	4   157  GOTO/253                  ?0        ?106                 ?2                  	;0
	5   159  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'strlen'          	;1	<<2
	6   159  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	7   159  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	8   159  IS_SMALLER/19             #8=       5:0                  $7                  	;0
	9   159  JMPZ_EX/46                #8=       #8                   ?20                 	;0	>>20
	10  159  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'substr'          	;3
	11  159  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'strtolower'      	;1
	12  159  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  159  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	14  159  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
	15  159  SEND_VAL_EX/116           ?96       10:0                 ?2                  	;0
	16  159  SEND_VAL_EX/116           ?112      11:4                 ?3                  	;0
	17  159  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	18  159  IS_EQUAL/17               #11=      $10                  12:'http'           	;0
	19  159  BOOL/52                   #8=       #11                  ?0                  	;0
	20  159  BOOL_NOT/13               #12=      #8                   ?0                  	;0	<<9
	21  159  JMPZ/43                   ?0        #12                  ?23                 	;0	>>23
	22  160  GOTO/253                  ?0        ?3                   ?13                 	;0
	23  162  ASSIGN/38                 ?6        16?2                 14:'jpg'            	;0	<<21
	24  163  FETCH_CONSTANT/99         #14=      ?0                   15:'IMAGES_PATH'    	;16
	25  163  CONCAT/8                  #15=      #14                  16?0                	;0
	26  163  CONCAT/8                  #16=      #15                  18:'.'              	;0
	27  163  CONCAT/8                  #17=      #16                  16?2                	;0
	28  163  ASSIGN/38                 ?11       16?3                 #17                 	;0
	29  164  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'file_exists'    	;1
	30  164  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	31  164  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	32  164  JMPZ/43                   ?0        $19                  ?34                 	;0	>>34
	33  165  GOTO/253                  ?0        ?39                  ?21                 	;0
	34  167  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'curl_init'      	;0	<<32
	35  167  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	36  167  ASSIGN/38                 ?14       16?4                 $20                 	;0
	37  168  GOTO/253                  ?0        ?47                  ?24                 	;0
	38  172  GOTO/253                  ?0        ?3                   ?25                 	;0
	39  174  FETCH_CONSTANT/99         #22=      ?0                   26:'SERVER_ID'      	;16
	40  174  CONCAT/8                  #23=      29:'s:'              #22                 	;0
	41  174  CONCAT/8                  #24=      #23                  30:':/images/'      	;0
	42  174  CONCAT/8                  #25=      #24                  16?0                	;0
	43  174  CONCAT/8                  #26=      #25                  31:'.'              	;0
	44  174  CONCAT/8                  #27=      #26                  16?2                	;0
	45  174  RETURN/62                 ?0        #27                  ?0                  	;0
	46  175  GOTO/253                  ?0        ?3                   ?32                 	;0
	47  177  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'curl_setopt'    	;3
	48  177  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	49  177  FETCH_CONSTANT/99         #28=      ?0                   35:'CURLOPT_URL'    	;16
	50  177  SEND_VAL_EX/116           ?96       #28                  ?2                  	;0
	51  177  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
	52  177  DO_FCALL_BY_NAME/131      ?22       ?0                   ?0                  	;0
	53  178  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'curl_setopt'    	;3
	54  178  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	55  178  FETCH_CONSTANT/99         #30=      ?0                   40:'CURLOPT_RETURNTRANSFER'	;16
	56  178  SEND_VAL_EX/116           ?96       #30                  ?2                  	;0
	57  178  SEND_VAL_EX/116           ?112      43:true              ?3                  	;0
	58  178  DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
	59  179  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'curl_setopt'    	;3
	60  179  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	61  179  FETCH_CONSTANT/99         #32=      ?0                   46:'CURLOPT_CONNECTTIMEOUT'	;16
	62  179  SEND_VAL_EX/116           ?96       #32                  ?2                  	;0
	63  179  SEND_VAL_EX/116           ?112      49:5                 ?3                  	;0
	64  179  DO_FCALL_BY_NAME/131      ?26       ?0                   ?0                  	;0
	65  180  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'curl_setopt'    	;3
	66  180  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	67  180  FETCH_CONSTANT/99         #34=      ?0                   52:'CURLOPT_TIMEOUT'	;16
	68  180  SEND_VAL_EX/116           ?96       #34                  ?2                  	;0
	69  180  SEND_VAL_EX/116           ?112      55:5                 ?3                  	;0
	70  180  DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
	71  181  INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'curl_exec'      	;1
	72  181  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	73  181  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	74  181  ASSIGN/38                 ?30       16?5                 $36                 	;0
	75  182  GOTO/253                  ?0        ?76                  ?58                 	;0
	76  184  INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'strlen'         	;1
	77  184  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	78  184  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	79  184  IS_SMALLER/19             #39=      61:0                 $38                 	;0
	80  184  BOOL_NOT/13               #40=      #39                  ?0                  	;0
	81  184  JMPZ/43                   ?0        #40                  ?83                 	;0	>>83
	82  185  GOTO/253                  ?0        ?38                  ?62                 	;0
	83  187  FETCH_CONSTANT/99         #41=      ?0                   63:'IMAGES_PATH'    	;16	<<81
	84  187  CONCAT/8                  #42=      #41                  16?0                	;0
	85  187  CONCAT/8                  #43=      #42                  66:'.'              	;0
	86  187  CONCAT/8                  #44=      #43                  16?2                	;0
	87  187  ASSIGN/38                 ?38       16?6                 #44                 	;0
	88  188  INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'file_put_contents'	;2
	89  188  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	90  188  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	91  188  DO_FCALL_BY_NAME/131      ?39       ?0                   ?0                  	;0
	92  189  INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'file_exists'    	;1
	93  189  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	94  189  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
	95  189  BOOL_NOT/13               #48=      $47                  ?0                  	;0
	96  189  JMPZ/43                   ?0        #48                  ?98                 	;0	>>98
	97  190  GOTO/253                  ?0        ?38                  ?71                 	;0
	98  192  FETCH_CONSTANT/99         #49=      ?0                   72:'SERVER_ID'      	;16	<<96
	99  192  CONCAT/8                  #50=      75:'s:'              #49                 	;0
	100 192  CONCAT/8                  #51=      #50                  76:':/images/'      	;0
	101 192  CONCAT/8                  #52=      #51                  16?0                	;0
	102 192  CONCAT/8                  #53=      #52                  77:'.'              	;0
	103 192  CONCAT/8                  #54=      #53                  16?2                	;0
	104 192  RETURN/62                 ?0        #54                  ?0                  	;0
	105 193  GOTO/253                  ?0        ?38                  ?78                 	;0
	106 195  NOP/0                     ?0        79:NULL              ?0                  	;4294967295
	*/
}

function ADD0B2C53b2714A1()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   199  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   200  INIT_METHOD_CALL/112      ?0        16?0                 1:'query'           	;1
	2   200  SEND_VAL_EX/116           ?80       3:'SELECT MAX(`order`) AS `order` FROM `streams`;' ?1                  	;0
	3   200  DO_FCALL/60               ?0        ?0                   ?0                  	;0
	4   201  INIT_METHOD_CALL/112      ?0        16?0                 4:'num_rows'        	;0
	5   201  DO_FCALL/60               $2=       ?0                   ?0                  	;0
	6   201  IS_EQUAL/17               #3=       $2                   6:1                 	;0
	7   201  BOOL_NOT/13               #4=       #3                   ?0                  	;0
	8   201  JMPZ/43                   ?0        #4                   ?10                 	;0	>>10
	9   202  GOTO/253                  ?0        ?19                  ?7                  	;0
	10  204  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'intval'          	;1	<<8
	11  204  INIT_METHOD_CALL/112      ?0        16?0                 10:'get_row'        	;0
	12  204  DO_FCALL/60               $5=       ?0                   ?0                  	;0
	13  204  SEPARATE/156              $5=       $5                   ?0                  	;0
	14  204  FETCH_DIM_FUNC_ARG/93     $6=       $5                   12:'order'          	;1
	15  204  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
	16  204  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	17  204  ADD/1                     #8=       $7                   13:1                	;0
	18  204  RETURN/62                 ?0        #8                   ?0                  	;0
	19  206  RETURN/62                 ?0        14:0                 ?0                  	;0
	20  207  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
	*/
}

function B47fB5320E43F112($Abcb228699a7f743)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   209  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   211  BIND_GLOBAL/168           ?0        16?1                 0:'b62d6460eb33ea07'	;0
	2   212  INIT_METHOD_CALL/112      ?0        16?1                 1:'query'           	;2
	3   212  SEND_VAL_EX/116           ?80       3:'SELECT * FROM `bouquets` WHERE `id` = ?;' ?1                  	;0
	4   212  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	5   212  DO_FCALL/60               ?0        ?0                   ?0                  	;0
	6   213  INIT_METHOD_CALL/112      ?0        16?1                 4:'num_rows'        	;0
	7   213  DO_FCALL/60               $3=       ?0                   ?0                  	;0
	8   213  IS_EQUAL/17               #4=       $3                   6:1                 	;0
	9   213  BOOL_NOT/13               #5=       #4                   ?0                  	;0
	10  213  JMPZ/43                   ?0        #5                   ?12                 	;0	>>12
	11  214  GOTO/253                  ?0        ?15                  ?7                  	;0
	12  216  INIT_METHOD_CALL/112      ?0        16?1                 8:'get_row'         	;0	<<10
	13  216  DO_FCALL/60               $6=       ?0                   ?0                  	;0
	14  216  RETURN/62                 ?0        $6                   ?0                  	;0
	15  218  RETURN/62                 ?0        10:NULL              ?0                  	;0
	16  219  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
	*/
}

function b8b65e8cB6A1DfE9($b5fd3e3f0096d7f4, $Abcb228699a7f743)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   221  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   221  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   223  BIND_GLOBAL/168           ?0        16?2                 0:'b62d6460eb33ea07'	;0
	3   224  INIT_FCALL/61             ?0        ?192                 1:'b47fb5320e43f112'	;1
	4   224  SEND_VAR/117              ?80       16?0                 ?1                  	;0
	5   224  DO_FCALL/60               $5=       ?0                   ?0                  	;0
	6   224  ASSIGN/38                 ?1        16?3                 $5                  	;0
	7   225  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'json_decode'     	;2
	8   225  FETCH_DIM_FUNC_ARG/93     $7=       16?3                 4:'bouquet_movies'  	;1
	9   225  SEND_VAR_EX/66            ?80       $7                   ?1                  	;0
	10  225  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
	11  225  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	12  225  ASSIGN/38                 ?4        16?4                 $8                  	;0
	13  226  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'in_array'        	;2
	14  226  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	15  226  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	16  226  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	17  226  JMPZ/43                   ?0        $10                  ?19                 	;0	>>19
	18  227  GOTO/253                  ?0        ?24                  ?8                  	;0
	19  229  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'intval'          	;1	<<17
	20  229  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	21  229  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	22  229  ASSIGN_DIM/147            ?6        16?4                 ?4397406            	;0
	23  229  OP_DATA/137               ?0        $12                  ?0                  	;0
	24  231  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'implode'        	;2
	25  231  SEND_VAL_EX/116           ?80       13:','               ?1                  	;0
	26  231  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'array_map'      	;2
	27  231  SEND_VAL_EX/116           ?80       16:'intval'          ?1                  	;0
	28  231  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	29  231  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	30  231  SEND_VAR_NO_REF_EX/50     ?96       $13                  ?2                  	;0
	31  231  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	32  231  CONCAT/8                  #15=      17:'['               $14                 	;0
	33  231  CONCAT/8                  #16=      #15                  18:']'              	;0
	34  231  ASSIGN/38                 ?12       16?4                 #16                 	;0
	35  232  INIT_METHOD_CALL/112      ?0        16?2                 19:'query'          	;3
	36  232  SEND_VAL_EX/116           ?80       21:'UPDATE `bouquets` SET `bouquet_movies` = ? WHERE `id` = ?;' ?1                  	;0
	37  232  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	38  232  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
	39  232  DO_FCALL/60               ?13       ?0                   ?0                  	;0
	40  233  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
	*/
}

function ED8DbF4549416fa2()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   237  JMP/42                    ?0        ?347                 ?0                  	;0	>>347
	1   239  INIT_METHOD_CALL/112      ?0        16?0                 1:'query'           	;3
	2   239  SEND_VAL_EX/116           ?80       3:'UPDATE `streams` SET `stream_source` = ? WHERE `id` = ?;' ?1                  	;0
	3   239  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'json_encode'     	;1
	4   239  FETCH_CONSTANT/99         #19=      ?0                   6:'VOD_PATH'        	;16
	5   239  CONCAT/8                  #20=      #19                  16?1                	;0
	6   239  CONCAT/8                  #21=      #20                  9:'.mp4'            	;0
	7   239  INIT_ARRAY/71             #22=      #21                  ?0                  	;4
	8   239  SEND_VAL_EX/116           ?80       #22                  ?1                  	;0
	9   239  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	10  239  SEND_VAR_NO_REF_EX/50     ?96       $23                  ?2                  	;0
	11  239  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
	12  239  DO_FCALL/60               ?5        ?0                   ?0                  	;0
	13  240  INIT_METHOD_CALL/112      ?0        16?0                 10:'query'          	;3
	14  240  SEND_VAL_EX/116           ?80       12:'INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`, `pid`, `to_analyze`) VALUES(?, ?, NULL, 1, 1);' ?1                  	;0
	15  240  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	16  240  FETCH_CONSTANT/99         #25=      ?0                   13:'SERVER_ID'      	;16
	17  240  SEND_VAL_EX/116           ?112      #25                  ?3                  	;0
	18  240  DO_FCALL/60               ?7        ?0                   ?0                  	;0
	19  241  INIT_METHOD_CALL/112      ?0        16?0                 16:'query'          	;3
	20  241  SEND_VAL_EX/116           ?80       18:'UPDATE `recordings` SET `status` = 2, `created_id` = ? WHERE `id` = ?;' ?1                  	;0
	21  241  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	22  241  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	23  241  DO_FCALL/60               ?8        ?0                   ?0                  	;0
	24  244  GOTO/253                  ?0        ?274                 ?19                 	;0
	25  246  INIT_METHOD_CALL/112      ?0        16?0                 20:'db_connect'     	;0
	26  246  DO_FCALL/60               ?9        ?0                   ?0                  	;0
	27  248  BOOL_NOT/13               #29=      16?3                 ?0                  	;0
	28  248  JMPZ/43                   ?0        #29                  ?30                 	;0	>>30
	29  249  GOTO/253                  ?0        ?274                 ?22                 	;0
	30  251  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'file_exists'    	;1	<<28
	31  251  FETCH_CONSTANT/99         #30=      ?0                   25:'ARCHIVE_PATH'   	;16
	32  251  CONCAT/8                  #31=      #30                  16?2                	;0
	33  251  CONCAT/8                  #32=      #31                  28:'.ts'            	;0
	34  251  SEND_VAL_EX/116           ?80       #32                  ?1                  	;0
	35  251  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	36  251  JMPZ_EX/46                #34=      $33                  ?45                 	;0	>>45
	37  251  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'filesize'       	;1
	38  251  FETCH_CONSTANT/99         #35=      ?0                   31:'ARCHIVE_PATH'   	;16
	39  251  CONCAT/8                  #36=      #35                  16?2                	;0
	40  251  CONCAT/8                  #37=      #36                  34:'.ts'            	;0
	41  251  SEND_VAL_EX/116           ?80       #37                  ?1                  	;0
	42  251  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	43  251  IS_SMALLER/19             #39=      35:0                 $38                 	;0
	44  251  BOOL/52                   #34=      #39                  ?0                  	;0
	45  251  JMPZ/43                   ?0        #34                  ?47                 	;0	>>47	<<36
	46  252  GOTO/253                  ?0        ?253                 ?36                 	;0
	47  254  ECHO/40                   ?0        37:'Recording size is 0 bytes.
' ?0                  	;0	<<45
	48  255  GOTO/253                  ?0        ?251                 ?38                 	;0
	49  257  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'stream_get_line'	;2
	50  257  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	51  257  SEND_VAL_EX/116           ?96       41:4096              ?2                  	;0
	52  257  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	53  257  ASSIGN/38                 ?22       16?4                 $40                 	;0
	54  258  ISSET_ISEMPTY_CV/197      #42=      16?4                 ?0                  	;16777216
	55  258  JMPZ/43                   ?0        #42                  ?57                 	;0	>>57
	56  259  GOTO/253                  ?0        ?137                 ?42                 	;0
	57  261  ASSIGN_ADD/23             ?24       16?6                 16?4                	;0	<<55
	58  262  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'fwrite'         	;2
	59  262  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	60  262  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	61  262  DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
	62  263  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'fflush'         	;1
	63  263  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	64  263  DO_FCALL_BY_NAME/131      ?26       ?0                   ?0                  	;0
	65  264  GOTO/253                  ?0        ?136                 ?47                 	;0
	66  266  INIT_FCALL/61             ?0        ?960                 49:'cb24148cf9ab2a75'	;1
	67  266  FETCH_DIM_R/81            $47=      16?8                 50:'stream_icon'    	;0
	68  266  SEND_VAR/117              ?80       $47                  ?1                  	;0
	69  266  DO_FCALL/60               $48=      ?0                   ?0                  	;0
	70  266  ASSIGN_DIM/147            ?27       16?8                 48:'stream_icon'    	;0
	71  266  OP_DATA/137               ?0        $48                  ?0                  	;0
	72  268  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'intval'         	;1
	73  268  FETCH_DIM_R/81            $49=      16?8                 53:'end'            	;0
	74  268  FETCH_DIM_R/81            $50=      16?8                 54:'start'          	;0
	75  268  SUB/2                     #51=      $49                  $50                 	;0
	76  268  SEND_VAL_EX/116           ?80       #51                  ?1                  	;0
	77  268  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	78  268  ASSIGN/38                 ?34       16?9                 $52                 	;0
	79  269  INIT_FCALL/61             ?0        ?832                 55:'c73ed8d0b70ce12f'	;1
	80  269  SEND_VAL/65               ?80       56:'streams'         ?1                  	;0
	81  269  DO_FCALL/60               $54=      ?0                   ?0                  	;0
	82  269  ASSIGN/38                 ?36       16?10                $54                 	;0
	83  270  ASSIGN_DIM/147            ?37       16?10                57:'type'           	;0
	84  270  OP_DATA/137               ?0        58:2                 ?0                  	;0
	85  271  GOTO/253                  ?0        ?378                 ?59                 	;0
	86  273  ASSIGN_DIM/147            ?38       16?10                60:'rating'         	;0
	87  273  OP_DATA/137               ?0        61:0                 ?0                  	;0
	88  274  ASSIGN_DIM/147            ?39       16?10                62:'read_native'    	;0
	89  274  OP_DATA/137               ?0        63:0                 ?0                  	;0
	90  275  ASSIGN_DIM/147            ?40       16?10                64:'movie_symlink'  	;0
	91  275  OP_DATA/137               ?0        65:0                 ?0                  	;0
	92  276  ASSIGN_DIM/147            ?41       16?10                66:'remove_subtitles'	;0
	93  276  OP_DATA/137               ?0        67:0                 ?0                  	;0
	94  277  ASSIGN_DIM/147            ?42       16?10                68:'transcode_profile_id'	;0
	95  277  OP_DATA/137               ?0        69:0                 ?0                  	;0
	96  278  GOTO/253                  ?0        ?168                 ?70                 	;0
	97  280  ASSIGN/38                 ?43       16?3                 71:false            	;0
	98  281  GOTO/253                  ?0        ?24                  ?72                 	;0
	99  283  INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'json_decode'    	;2
	100 283  FETCH_DIM_FUNC_ARG/93     $63=      16?8                 75:'bouquets'       	;1
	101 283  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
	102 283  SEND_VAL_EX/116           ?96       76:true              ?2                  	;0
	103 283  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
	104 283  FE_RESET_R/77             $65=      $64                  ?111                	;0
	105 283  FE_FETCH_R/78             ?0        $65                  16?11               	;111	>>111	<<110
	106 284  INIT_FCALL/61             ?0        ?384                 77:'b8b65e8cb6a1dfe9'	;2
	107 284  SEND_VAR/117              ?80       16?11                ?1                  	;0
	108 284  SEND_VAR/117              ?96       16?1                 ?2                  	;0
	109 284  DO_FCALL/60               ?47       ?0                   ?0                  	;0
	110 285  JMP/42                    ?0        ?105                 ?0                  	;0	>>105
	111 285  FE_FREE/127               ?0        $65                  ?0                  	;0	<<104
	112 288  GOTO/253                  ?0        ?1                   ?78                 	;0
	113 291  ASSIGN/38                 $67=      16?6                 79:0                	;0
	114 291  ASSIGN/38                 ?49       16?12                $67                 	;0
	115 292  ASSIGN/38                 ?50       16?3                 80:false            	;0
	116 293  INIT_METHOD_CALL/112      ?0        16?0                 81:'get_row'        	;0
	117 293  DO_FCALL/60               $70=      ?0                   ?0                  	;0
	118 293  ASSIGN/38                 ?52       16?8                 $70                 	;0
	119 294  INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'time'           	;0
	120 294  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
	121 294  FETCH_DIM_R/81            $73=      16?8                 85:'start'          	;0
	122 294  SUB/2                     #74=      $73                  86:60               	;0
	123 294  IS_SMALLER_OR_EQUAL/20    #75=      #74                  $72                 	;0
	124 294  JMPZ_EX/46                #75=      #75                  ?130                	;0	>>130
	125 294  INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'time'           	;0
	126 294  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
	127 294  FETCH_DIM_R/81            $77=      16?8                 89:'end'            	;0
	128 294  IS_SMALLER_OR_EQUAL/20    #78=      $76                  $77                 	;0
	129 294  BOOL/52                   #75=      #78                  ?0                  	;0
	130 294  JMPNZ_EX/47               #75=      #75                  ?133                	;0	>>133	<<124
	131 294  FETCH_DIM_R/81            $79=      16?8                 90:'archive'        	;0
	132 294  BOOL/52                   #75=      $79                  ?0                  	;0
	133 294  JMPZ/43                   ?0        #75                  ?135                	;0	>>135	<<130
	134 295  GOTO/253                  ?0        ?319                 ?91                 	;0
	135 297  GOTO/253                  ?0        ?317                 ?92                 	;0	<<133
	136 299  ASSIGN/38                 ?61       16?12                93:0                	;0
	137 301  INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'time'           	;0
	138 301  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
	139 301  FETCH_DIM_R/81            $82=      16?8                 96:'end'            	;0
	140 301  IS_SMALLER_OR_EQUAL/20    #83=      $82                  $81                 	;0
	141 301  JMPZ_EX/46                #83=      #83                  ?145                	;0	>>145
	142 301  FETCH_DIM_R/81            $84=      16?8                 97:'archive'        	;0
	143 301  BOOL_NOT/13               #85=      $84                  ?0                  	;0
	144 301  BOOL/52                   #83=      #85                  ?0                  	;0
	145 301  BOOL_NOT/13               #86=      #83                  ?0                  	;0	<<141
	146 301  JMPZ/43                   ?0        #86                  ?148                	;0	>>148
	147 302  GOTO/253                  ?0        ?530                 ?98                 	;0
	148 304  ASSIGN/38                 ?68       16?3                 99:true             	;0	<<146
	149 305  INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'fclose'        	;1
	150 305  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	151 305  DO_FCALL_BY_NAME/131      ?69       ?0                   ?0                  	;0
	152 306  GOTO/253                  ?0        ?529                 ?102                	;0
	153 308  IS_SMALLER/19             #89=      103:0                16?13               	;0
	154 308  JMPZ_EX/46                #89=      #89                  ?159                	;0	>>159
	155 308  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'file_exists'   	;1
	156 308  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	157 308  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
	158 308  BOOL/52                   #89=      $90                  ?0                  	;0
	159 308  JMPZ/43                   ?0        #89                  ?161                	;0	>>161	<<154
	160 309  GOTO/253                  ?0        ?163                 ?106                	;0
	161 311  ECHO/40                   ?0        107:'Channel is not running.
' ?0                  	;0	<<159
	162 312  GOTO/253                  ?0        ?451                 ?108                	;0
	163 314  INIT_METHOD_CALL/112      ?0        16?0                 109:'query'         	;2
	164 314  SEND_VAL_EX/116           ?80       111:'UPDATE `recordings` SET `status` = 1 WHERE `id` = ?;' ?1                  	;0
	165 314  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	166 314  DO_FCALL/60               ?72       ?0                   ?0                  	;0
	167 315  GOTO/253                  ?0        ?205                 ?112                	;0
	168 317  INIT_FCALL/61             ?0        ?224                 114:'add0b2c53b2714a1'	;0
	169 317  DO_FCALL/60               $93=      ?0                   ?0                  	;0
	170 317  ASSIGN_DIM/147            ?73       16?10                113:'order'         	;0
	171 317  OP_DATA/137               ?0        $93                  ?0                  	;0
	172 318  INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'time'          	;0
	173 318  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
	174 318  ASSIGN_DIM/147            ?75       16?10                115:'added'         	;0
	175 318  OP_DATA/137               ?0        $95                  ?0                  	;0
	176 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'implode'       	;2
	177 319  SEND_VAL_EX/116           ?80       121:','              ?1                  	;0
	178 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'array_map'     	;2
	179 319  SEND_VAL_EX/116           ?80       124:'intval'         ?1                  	;0
	180 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'json_decode'   	;2
	181 319  FETCH_DIM_FUNC_ARG/93     $97=      16?8                 127:'category_id'   	;1
	182 319  SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
	183 319  SEND_VAL_EX/116           ?96       128:true             ?2                  	;0
	184 319  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
	185 319  SEND_VAR_NO_REF_EX/50     ?96       $98                  ?2                  	;0
	186 319  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
	187 319  SEND_VAR_NO_REF_EX/50     ?96       $99                  ?2                  	;0
	188 319  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
	189 319  CONCAT/8                  #101=     129:'['              $100                	;0
	190 319  CONCAT/8                  #102=     #101                 130:']'             	;0
	191 319  ASSIGN_DIM/147            ?77       16?10                118:'category_id'   	;0
	192 319  OP_DATA/137               ?0        #102                 ?0                  	;0
	193 320  INIT_FCALL/61             ?0        ?624                 131:'c483a3a59265139e'	;1
	194 320  SEND_VAR/117              ?80       16?10                ?1                  	;0
	195 320  DO_FCALL/60               $103=     ?0                   ?0                  	;0
	196 320  ASSIGN/38                 ?85       16?15                $103                	;0
	197 321  FETCH_DIM_R/81            $105=     16?15                132:'columns'       	;0
	198 321  CONCAT/8                  #106=     133:'REPLACE INTO `streams`(' $105                	;0
	199 321  CONCAT/8                  #107=     #106                 134:') VALUES('     	;0
	200 321  FETCH_DIM_R/81            $108=     16?15                135:'placeholder'   	;0
	201 321  CONCAT/8                  #109=     #107                 $108                	;0
	202 321  CONCAT/8                  #110=     #109                 136:');'            	;0
	203 321  ASSIGN/38                 ?92       16?16                #110                	;0
	204 322  GOTO/253                  ?0        ?467                 ?137                	;0
	205 324  INIT_METHOD_CALL/112      ?0        16?0                 138:'close_mysql'   	;0
	206 324  DO_FCALL/60               ?93       ?0                   ?0                  	;0
	207 326  INIT_STATIC_METHOD_CALL/113 ?0        140:'XUI'            142:'B4AB2a8EB0Aa68eE'	;2
	208 326  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	209 326  FETCH_DIM_FUNC_ARG/93     $113=     16?8                 144:'stream_id'     	;2
	210 326  SEND_VAR_EX/66            ?96       $113                 ?2                  	;0
	211 326  DO_FCALL/60               $114=     ?0                   ?0                  	;0
	212 326  JMPZ_EX/46                #115=     $114                 ?217                	;0	>>217
	213 326  INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'file_exists'   	;1
	214 326  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	215 326  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
	216 326  BOOL/52                   #115=     $116                 ?0                  	;0
	217 326  BOOL_NOT/13               #117=     #115                 ?0                  	;0	<<212
	218 326  JMPZ/43                   ?0        #117                 ?220                	;0	>>220
	219 327  GOTO/253                  ?0        ?451                 ?147                	;0
	220 329  FETCH_DIM_R/81            $118=     16?8                 148:'archive'       	;0	<<218
	221 329  JMPZ/43                   ?0        $118                 ?223                	;0	>>223
	222 330  GOTO/253                  ?0        ?283                 ?149                	;0
	223 332  BEGIN_SILENCE/57          #119=     ?0                   ?0                  	;0	<<221
	224 332  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'fopen'         	;2
	225 332  FETCH_CONSTANT/99         #121=     ?0                   155:'SERVER_ID'     	;16
	226 332  FETCH_STATIC_PROP_R/173   $120=     152:'rServers'       153:'XUI'           	;0
	227 332  FETCH_DIM_R/81            $122=     $120                 #121                	;0
	228 332  FETCH_DIM_R/81            $123=     $122                 158:'http_broadcast_port'	;0
	229 332  CONCAT/8                  #124=     159:'http://127.0.0.1:' $123                	;0
	230 332  CONCAT/8                  #125=     #124                 160:'/admin/live?password='	;0
	231 332  FETCH_STATIC_PROP_R/173   $126=     161:'rSettings'      162:'XUI'           	;0
	232 332  FETCH_DIM_R/81            $127=     $126                 164:'live_streaming_pass'	;0
	233 332  CONCAT/8                  #128=     #125                 $127                	;0
	234 332  CONCAT/8                  #129=     #128                 165:'&stream='      	;0
	235 332  FETCH_DIM_R/81            $130=     16?8                 166:'stream_id'     	;0
	236 332  CONCAT/8                  #131=     #129                 $130                	;0
	237 332  CONCAT/8                  #132=     #131                 167:'&extension=ts' 	;0
	238 332  SEND_VAL_EX/116           ?80       #132                 ?1                  	;0
	239 332  SEND_VAL_EX/116           ?96       168:'r'              ?2                  	;0
	240 332  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
	241 332  END_SILENCE/58            ?0        #119                 ?0                  	;0
	242 332  ASSIGN/38                 ?115      16?5                 $133                	;0
	243 333  GOTO/253                  ?0        ?282                 ?169                	;0
	244 335  ECHO/40                   ?0        170:'Too many fails!
' ?0                  	;0
	245 336  GOTO/253                  ?0        ?451                 ?171                	;0
	246 338  ECHO/40                   ?0        172:'Broken pipe! Restarting...
' ?0                  	;0
	247 339  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'sleep'         	;1
	248 339  SEND_VAL_EX/116           ?80       175:1                ?1                  	;0
	249 339  DO_FCALL_BY_NAME/131      ?116      ?0                   ?0                  	;0
	250 340  GOTO/253                  ?0        ?450                 ?176                	;0
	251 342  ASSIGN/38                 ?117      16?3                 177:false           	;0
	252 343  GOTO/253                  ?0        ?274                 ?178                	;0
	253 345  ECHO/40                   ?0        179:'Recording complete! Converting to MP4...
' ?0                  	;0
	254 346  ISSET_ISEMPTY_DIM_OBJ/115 #137=     16?8                 180:'stream_icon'   	;16777216
	255 346  JMPZ/43                   ?0        #137                 ?257                	;0	>>257
	256 347  GOTO/253                  ?0        ?72                  ?181                	;0
	257 349  GOTO/253                  ?0        ?66                  ?182                	;0	<<255
	258 351  BEGIN_SILENCE/57          #138=     ?0                   ?0                  	;0
	259 351  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'unlink'        	;1
	260 351  FETCH_CONSTANT/99         #139=     ?0                   185:'ARCHIVE_PATH'  	;16
	261 351  CONCAT/8                  #140=     #139                 16?2                	;0
	262 351  CONCAT/8                  #141=     #140                 188:'.ts'           	;0
	263 351  SEND_VAL_EX/116           ?80       #141                 ?1                  	;0
	264 351  DO_FCALL_BY_NAME/131      ?123      ?0                   ?0                  	;0
	265 351  END_SILENCE/58            ?0        #138                 ?0                  	;0
	266 354  GOTO/253                  ?0        ?535                 ?189                	;0
	267 356  FETCH_DIM_R/81            $143=     16?8                 190:'archive'       	;0
	268 356  BOOL_NOT/13               #144=     $143                 ?0                  	;0
	269 356  JMPZ/43                   ?0        #144                 ?271                	;0	>>271
	270 357  GOTO/253                  ?0        ?273                 ?191                	;0
	271 359  ASSIGN/38                 ?126      16?3                 192:true            	;0	<<269
	272 360  GOTO/253                  ?0        ?451                 ?193                	;0
	273 363  GOTO/253                  ?0        ?455                 ?194                	;0
	274 367  JMPZ/43                   ?0        16?3                 ?276                	;0	>>276
	275 368  GOTO/253                  ?0        ?266                 ?195                	;0
	276 370  ECHO/40                   ?0        196:'Recording incomplete!
' ?0                  	;0	<<274
	277 371  INIT_METHOD_CALL/112      ?0        16?0                 197:'query'         	;2
	278 371  SEND_VAL_EX/116           ?80       199:'UPDATE `recordings` SET `status` = 3 WHERE `id` = ?;' ?1                  	;0
	279 371  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	280 371  DO_FCALL/60               ?127      ?0                   ?0                  	;0
	281 372  GOTO/253                  ?0        ?258                 ?200                	;0
	282 374  GOTO/253                  ?0        ?316                 ?201                	;0
	283 376  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'intval'        	;1
	284 376  FETCH_DIM_R/81            $147=     16?8                 204:'end'           	;0
	285 376  FETCH_DIM_R/81            $148=     16?8                 205:'start'         	;0
	286 376  SUB/2                     #149=     $147                 $148                	;0
	287 376  DIV/4                     #150=     #149                 206:60              	;0
	288 376  SEND_VAL_EX/116           ?80       #150                 ?1                  	;0
	289 376  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
	290 376  ASSIGN/38                 ?133      16?17                $151                	;0
	291 377  BEGIN_SILENCE/57          #153=     ?0                   ?0                  	;0
	292 377  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'fopen'         	;2
	293 377  FETCH_CONSTANT/99         #155=     ?0                   212:'SERVER_ID'     	;16
	294 377  FETCH_STATIC_PROP_R/173   $154=     209:'rServers'       210:'XUI'           	;0
	295 377  FETCH_DIM_R/81            $156=     $154                 #155                	;0
	296 377  FETCH_DIM_R/81            $157=     $156                 215:'http_broadcast_port'	;0
	297 377  CONCAT/8                  #158=     216:'http://127.0.0.1:' $157                	;0
	298 377  CONCAT/8                  #159=     #158                 217:'/admin/timeshift?password='	;0
	299 377  FETCH_STATIC_PROP_R/173   $160=     218:'rSettings'      219:'XUI'           	;0
	300 377  FETCH_DIM_R/81            $161=     $160                 221:'live_streaming_pass'	;0
	301 377  CONCAT/8                  #162=     #159                 $161                	;0
	302 377  CONCAT/8                  #163=     #162                 222:'&stream='      	;0
	303 377  FETCH_DIM_R/81            $164=     16?8                 223:'stream_id'     	;0
	304 377  CONCAT/8                  #165=     #163                 $164                	;0
	305 377  CONCAT/8                  #166=     #165                 224:'&start='       	;0
	306 377  FETCH_DIM_R/81            $167=     16?8                 225:'start'         	;0
	307 377  CONCAT/8                  #168=     #166                 $167                	;0
	308 377  CONCAT/8                  #169=     #168                 226:'&duration='    	;0
	309 377  CONCAT/8                  #170=     #169                 16?17               	;0
	310 377  CONCAT/8                  #171=     #170                 227:'&extension=ts' 	;0
	311 377  SEND_VAL_EX/116           ?80       #171                 ?1                  	;0
	312 377  SEND_VAL_EX/116           ?96       228:'r'              ?2                  	;0
	313 377  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
	314 377  END_SILENCE/58            ?0        #153                 ?0                  	;0
	315 377  ASSIGN/38                 ?154      16?5                 $172                	;0
	316 379  GOTO/253                  ?0        ?361                 ?229                	;0
	317 381  ECHO/40                   ?0        230:'Programme is not currently airing.
' ?0                  	;0
	318 382  GOTO/253                  ?0        ?451                 ?231                	;0
	319 384  INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'file_exists'   	;1
	320 384  FETCH_CONSTANT/99         #174=     ?0                   234:'STREAMS_PATH'  	;16
	321 384  FETCH_DIM_R/81            $175=     16?8                 237:'stream_id'     	;0
	322 384  CONCAT/8                  #176=     #174                 $175                	;0
	323 384  CONCAT/8                  #177=     #176                 238:'_.pid'         	;0
	324 384  SEND_VAL_EX/116           ?80       #177                 ?1                  	;0
	325 384  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
	326 384  JMPZ/43                   ?0        $178                 ?339                	;0	>>339
	327 384  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'intval'        	;1
	328 384  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'file_get_contents'	;1
	329 384  FETCH_CONSTANT/99         #179=     ?0                   243:'STREAMS_PATH'  	;16
	330 384  FETCH_DIM_R/81            $180=     16?8                 246:'stream_id'     	;0
	331 384  CONCAT/8                  #181=     #179                 $180                	;0
	332 384  CONCAT/8                  #182=     #181                 247:'_.pid'         	;0
	333 384  SEND_VAL_EX/116           ?80       #182                 ?1                  	;0
	334 384  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
	335 384  SEND_VAR_NO_REF_EX/50     ?80       $183                 ?1                  	;0
	336 384  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
	337 384  QM_ASSIGN/22              #185=     $184                 ?0                  	;0
	338 384  JMP/42                    ?0        ?340                 ?0                  	;0	>>340
	339 384  QM_ASSIGN/22              #185=     248:0                ?0                  	;0	<<326
	340 384  ASSIGN/38                 ?167      16?13                #185                	;0	<<338
	341 385  FETCH_CONSTANT/99         #187=     ?0                   249:'STREAMS_PATH'  	;16
	342 385  FETCH_DIM_R/81            $188=     16?8                 252:'stream_id'     	;0
	343 385  CONCAT/8                  #189=     #187                 $188                	;0
	344 385  CONCAT/8                  #190=     #189                 253:'_.m3u8'        	;0
	345 385  ASSIGN/38                 ?172      16?14                #190                	;0
	346 386  GOTO/253                  ?0        ?153                 ?254                	;0
	347 388  BIND_GLOBAL/168           ?0        16?0                 255:'b62d6460eb33ea07'	;0	<<0
	348 388  BIND_GLOBAL/168           ?0        16?2                 256:'Cea68b43e2d6b34e'	;0
	349 389  INIT_METHOD_CALL/112      ?0        16?0                 257:'query'         	;2
	350 389  SEND_VAL_EX/116           ?80       259:'SELECT * FROM `recordings` WHERE `id` = ?;' ?1                  	;0
	351 389  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	352 389  DO_FCALL/60               ?173      ?0                   ?0                  	;0
	353 390  INIT_METHOD_CALL/112      ?0        16?0                 260:'num_rows'      	;0
	354 390  DO_FCALL/60               $193=     ?0                   ?0                  	;0
	355 390  IS_SMALLER/19             #194=     262:0                $193                	;0
	356 390  JMPZ/43                   ?0        #194                 ?358                	;0	>>358
	357 391  GOTO/253                  ?0        ?113                 ?263                	;0
	358 393  ECHO/40                   ?0        264:'Recording entry doesn\'t exist.
' ?0                  	;0	<<356
	359 394  GOTO/253                  ?0        ?266                 ?265                	;0
	360 395  GOTO/253                  ?0        ?113                 ?266                	;0
	361 397  BOOL_NOT/13               #195=     16?5                 ?0                  	;0
	362 397  JMPZ/43                   ?0        #195                 ?364                	;0	>>364
	363 398  GOTO/253                  ?0        ?273                 ?267                	;0
	364 400  ECHO/40                   ?0        268:'Recording...
'  ?0                  	;0	<<362
	365 401  FETCH_DIM_R/81            $196=     16?8                 269:'archive'       	;0
	366 401  JMPZ/43                   ?0        $196                 ?368                	;0	>>368
	367 402  GOTO/253                  ?0        ?478                 ?270                	;0
	368 404  INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'fopen'         	;2	<<366
	369 404  FETCH_CONSTANT/99         #197=     ?0                   273:'ARCHIVE_PATH'  	;16
	370 404  CONCAT/8                  #198=     #197                 16?2                	;0
	371 404  CONCAT/8                  #199=     #198                 276:'.ts'           	;0
	372 404  SEND_VAL_EX/116           ?80       #199                 ?1                  	;0
	373 404  SEND_VAL_EX/116           ?96       277:'a'              ?2                  	;0
	374 404  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
	375 404  ASSIGN/38                 ?182      16?7                 $200                	;0
	376 405  GOTO/253                  ?0        ?486                 ?278                	;0
	377 406  GOTO/253                  ?0        ?478                 ?279                	;0
	378 408  ASSIGN_DIM/147            ?183      16?10                280:'stream_source' 	;0
	379 408  OP_DATA/137               ?0        281:'[]'             ?0                  	;0
	380 409  ASSIGN_DIM/147            ?184      16?10                282:'target_container'	;0
	381 409  OP_DATA/137               ?0        283:'mp4'            ?0                  	;0
	382 410  FETCH_DIM_R/81            $205=     16?8                 285:'title'         	;0
	383 410  ASSIGN_DIM/147            ?185      16?10                284:'stream_display_name'	;0
	384 410  OP_DATA/137               ?0        $205                 ?0                  	;0
	385 411  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'date'          	;1
	386 411  SEND_VAL_EX/116           ?80       289:'Y'              ?1                  	;0
	387 411  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
	388 411  ASSIGN_DIM/147            ?187      16?10                286:'year'          	;0
	389 411  OP_DATA/137               ?0        $207                 ?0                  	;0
	390 412  INIT_ARRAY/71             #209=     291:NULL             292:'kinopoisk_url' 	;106
	391 412  ADD_ARRAY_ELEMENT/72      #209=     293:NULL             294:'tmdb_id'       	;0
	392 412  FETCH_DIM_R/81            $210=     16?8                 295:'title'         	;0
	393 412  ADD_ARRAY_ELEMENT/72      #209=     $210                 296:'name'          	;0
	394 412  FETCH_DIM_R/81            $211=     16?8                 297:'title'         	;0
	395 412  ADD_ARRAY_ELEMENT/72      #209=     $211                 298:'o_name'        	;0
	396 412  FETCH_DIM_R/81            $212=     16?8                 299:'stream_icon'   	;0
	397 412  ADD_ARRAY_ELEMENT/72      #209=     $212                 300:'cover_big'     	;0
	398 412  FETCH_DIM_R/81            $213=     16?8                 301:'stream_icon'   	;0
	399 412  ADD_ARRAY_ELEMENT/72      #209=     $213                 302:'movie_image'   	;0
	400 412  INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'date'          	;2
	401 412  SEND_VAL_EX/116           ?80       305:'Y-m-d'          ?1                  	;0
	402 412  FETCH_DIM_FUNC_ARG/93     $214=     16?8                 306:'start'         	;2
	403 412  SEND_VAR_EX/66            ?96       $214                 ?2                  	;0
	404 412  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
	405 412  ADD_ARRAY_ELEMENT/72      #209=     $215                 307:'release_date'  	;0
	406 412  INIT_FCALL_BY_NAME/59     ?0        ?0                   308:'intval'        	;1
	407 412  DIV/4                     #216=     16?9                 310:60              	;0
	408 412  SEND_VAL_EX/116           ?80       #216                 ?1                  	;0
	409 412  DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
	410 412  ADD_ARRAY_ELEMENT/72      #209=     $217                 311:'episode_run_time'	;0
	411 412  ADD_ARRAY_ELEMENT/72      #209=     312:NULL             313:'youtube_trailer'	;0
	412 412  ADD_ARRAY_ELEMENT/72      #209=     314:''               315:'director'      	;0
	413 412  ADD_ARRAY_ELEMENT/72      #209=     316:''               317:'actors'        	;0
	414 412  ADD_ARRAY_ELEMENT/72      #209=     318:''               319:'cast'          	;0
	415 412  INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'trim'          	;1
	416 412  FETCH_DIM_FUNC_ARG/93     $218=     16?8                 322:'description'   	;1
	417 412  SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
	418 412  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
	419 412  ADD_ARRAY_ELEMENT/72      #209=     $219                 323:'description'   	;0
	420 412  INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'trim'          	;1
	421 412  FETCH_DIM_FUNC_ARG/93     $220=     16?8                 326:'description'   	;1
	422 412  SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
	423 412  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
	424 412  ADD_ARRAY_ELEMENT/72      #209=     $221                 327:'plot'          	;0
	425 412  ADD_ARRAY_ELEMENT/72      #209=     328:''               329:'age'           	;0
	426 412  ADD_ARRAY_ELEMENT/72      #209=     330:''               331:'mpaa_rating'   	;0
	427 412  ADD_ARRAY_ELEMENT/72      #209=     332:0                333:'rating_count_kinopoisk'	;0
	428 412  ADD_ARRAY_ELEMENT/72      #209=     334:''               335:'country'       	;0
	429 412  ADD_ARRAY_ELEMENT/72      #209=     336:''               337:'genre'         	;0
	430 412  ADD_ARRAY_ELEMENT/72      #209=     338:array (
)        339:'backdrop_path' 	;0
	431 412  ADD_ARRAY_ELEMENT/72      #209=     16?9                 340:'duration_secs' 	;0
	432 412  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'sprintf'       	;4
	433 412  SEND_VAL_EX/116           ?80       343:'%02d:%02d:%02d' ?1                  	;0
	434 412  DIV/4                     #222=     16?9                 344:3600            	;0
	435 412  SEND_VAL_EX/116           ?96       #222                 ?2                  	;0
	436 412  DIV/4                     #223=     16?9                 345:60              	;0
	437 412  MOD/5                     #224=     #223                 346:60              	;0
	438 412  SEND_VAL_EX/116           ?112      #224                 ?3                  	;0
	439 412  MOD/5                     #225=     16?9                 347:60              	;0
	440 412  SEND_VAL_EX/116           ?128      #225                 ?4                  	;0
	441 412  DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
	442 412  ADD_ARRAY_ELEMENT/72      #209=     $226                 348:'duration'      	;0
	443 412  ADD_ARRAY_ELEMENT/72      #209=     349:array (
)        350:'video'         	;0
	444 412  ADD_ARRAY_ELEMENT/72      #209=     351:array (
)        352:'audio'         	;0
	445 412  ADD_ARRAY_ELEMENT/72      #209=     353:0                354:'bitrate'       	;0
	446 412  ADD_ARRAY_ELEMENT/72      #209=     355:0                356:'rating'        	;0
	447 412  ASSIGN_DIM/147            ?189      16?10                290:'movie_properties'	;0
	448 412  OP_DATA/137               ?0        #209                 ?0                  	;0
	449 413  GOTO/253                  ?0        ?86                  ?357                	;0
	450 415  GOTO/253                  ?0        ?207                 ?358                	;0
	451 419  FETCH_OBJ_R/82            $227=     16?0                 359:'connected'     	;0
	452 419  JMPZ/43                   ?0        $227                 ?454                	;0	>>454
	453 420  GOTO/253                  ?0        ?27                  ?360                	;0
	454 422  GOTO/253                  ?0        ?25                  ?361                	;0	<<452
	455 424  POST_INC/36               #228=     16?12                ?0                  	;0
	456 424  FREE/70                   ?0        #228                 ?0                  	;0
	457 425  IS_EQUAL/17               #229=     16?12                362:5               	;0
	458 425  BOOL_NOT/13               #230=     #229                 ?0                  	;0
	459 425  JMPZ/43                   ?0        #230                 ?461                	;0	>>461
	460 426  GOTO/253                  ?0        ?246                 ?363                	;0
	461 428  IS_SMALLER_OR_EQUAL/20    #231=     364:10485760         16?6                	;0	<<459
	462 428  BOOL_NOT/13               #232=     #231                 ?0                  	;0
	463 428  JMPZ/43                   ?0        #232                 ?465                	;0	>>465
	464 429  GOTO/253                  ?0        ?466                 ?365                	;0
	465 431  ASSIGN/38                 ?214      16?3                 366:true            	;0	<<463
	466 433  GOTO/253                  ?0        ?244                 ?367                	;0
	467 435  INIT_METHOD_CALL/112      ?0        16?0                 368:'query'         	;1
	468 435  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
	469 435  FETCH_DIM_R/81            $234=     16?15                370:'data'          	;0
	470 435  SEND_UNPACK/165           ?80       $234                 ?1                  	;0
	471 435  DO_FCALL/60               $235=     ?0                   ?0                  	;0
	472 435  JMPZ/43                   ?0        $235                 ?474                	;0	>>474
	473 436  GOTO/253                  ?0        ?477                 ?371                	;0
	474 438  ECHO/40                   ?0        372:'Failed to insert into database!
' ?0                  	;0	<<472
	475 439  ASSIGN/38                 ?217      16?3                 373:false           	;0
	476 440  GOTO/253                  ?0        ?24                  ?374                	;0
	477 442  GOTO/253                  ?0        ?492                 ?375                	;0
	478 445  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'fopen'         	;2
	479 445  FETCH_CONSTANT/99         #237=     ?0                   378:'ARCHIVE_PATH'  	;16
	480 445  CONCAT/8                  #238=     #237                 16?2                	;0
	481 445  CONCAT/8                  #239=     #238                 381:'.ts'           	;0
	482 445  SEND_VAL_EX/116           ?80       #239                 ?1                  	;0
	483 445  SEND_VAL_EX/116           ?96       382:'w'              ?2                  	;0
	484 445  DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
	485 445  ASSIGN/38                 ?222      16?7                 $240                	;0
	486 448  INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'feof'          	;1
	487 448  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	488 448  DO_FCALL_BY_NAME/131      $242=     ?0                   ?0                  	;0
	489 448  JMPZ/43                   ?0        $242                 ?491                	;0	>>491
	490 449  GOTO/253                  ?0        ?531                 ?385                	;0
	491 451  GOTO/253                  ?0        ?49                  ?386                	;0	<<489
	492 453  INIT_METHOD_CALL/112      ?0        16?0                 387:'last_insert_id'	;0
	493 453  DO_FCALL/60               $243=     ?0                   ?0                  	;0
	494 453  ASSIGN/38                 ?225      16?1                 $243                	;0
	495 454  INIT_FCALL_BY_NAME/59     ?0        ?0                   389:'shell_exec'    	;1
	496 454  FETCH_CONSTANT/99         #245=     ?0                   391:'FFMPEG_BIN_40' 	;16
	497 454  CONCAT/8                  #246=     #245                 394:' -i \''        	;0
	498 454  FETCH_CONSTANT/99         #247=     ?0                   395:'ARCHIVE_PATH'  	;16
	499 454  CONCAT/8                  #248=     #246                 #247                	;0
	500 454  CONCAT/8                  #249=     #248                 16?2                	;0
	501 454  CONCAT/8                  #250=     #249                 398:'.ts'           	;0
	502 454  CONCAT/8                  #251=     #250                 399:'\' -c:v copy -c:a copy \''	;0
	503 454  FETCH_CONSTANT/99         #252=     ?0                   400:'VOD_PATH'      	;16
	504 454  CONCAT/8                  #253=     #251                 #252                	;0
	505 454  CONCAT/8                  #254=     #253                 16?1                	;0
	506 454  CONCAT/8                  #255=     #254                 403:'.mp4'          	;0
	507 454  CONCAT/8                  #256=     #255                 404:'\''            	;0
	508 454  SEND_VAL_EX/116           ?80       #256                 ?1                  	;0
	509 454  DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
	510 454  ASSIGN/38                 ?239      16?18                $257                	;0
	511 455  BEGIN_SILENCE/57          #259=     ?0                   ?0                  	;0
	512 455  INIT_FCALL_BY_NAME/59     ?0        ?0                   405:'unlink'        	;1
	513 455  FETCH_CONSTANT/99         #260=     ?0                   407:'ARCHIVE_PATH'  	;16
	514 455  CONCAT/8                  #261=     #260                 16?2                	;0
	515 455  CONCAT/8                  #262=     #261                 410:'.ts'           	;0
	516 455  SEND_VAL_EX/116           ?80       #262                 ?1                  	;0
	517 455  DO_FCALL_BY_NAME/131      ?244      ?0                   ?0                  	;0
	518 455  END_SILENCE/58            ?0        #259                 ?0                  	;0
	519 456  INIT_FCALL_BY_NAME/59     ?0        ?0                   411:'file_exists'   	;1
	520 456  FETCH_CONSTANT/99         #264=     ?0                   413:'VOD_PATH'      	;16
	521 456  CONCAT/8                  #265=     #264                 16?1                	;0
	522 456  CONCAT/8                  #266=     #265                 416:'.mp4'          	;0
	523 456  SEND_VAL_EX/116           ?80       #266                 ?1                  	;0
	524 456  DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
	525 456  JMPZ/43                   ?0        $267                 ?527                	;0	>>527
	526 457  GOTO/253                  ?0        ?99                  ?417                	;0
	527 459  ECHO/40                   ?0        418:'Couldn\'t convert to MP4
' ?0                  	;0	<<525
	528 460  GOTO/253                  ?0        ?97                  ?419                	;0
	529 462  GOTO/253                  ?0        ?451                 ?420                	;0
	530 464  GOTO/253                  ?0        ?486                 ?421                	;0
	531 466  INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'fclose'        	;1
	532 466  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	533 466  DO_FCALL_BY_NAME/131      ?249      ?0                   ?0                  	;0
	534 467  GOTO/253                  ?0        ?267                 ?424                	;0
	535 469  NOP/0                     ?0        425:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   485  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   485  BIND_GLOBAL/168           ?0        16?1                 1:'Cea68b43e2d6b34e'	;0
	2   486  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'file_exists'     	;1
	3   486  FETCH_CONSTANT/99         #2=       ?0                   4:'ARCHIVE_PATH'    	;16
	4   486  CONCAT/8                  #3=       #2                   16?1                	;0
	5   486  CONCAT/8                  #4=       #3                   7:'_.record'        	;0
	6   486  SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
	7   486  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	8   486  BOOL_NOT/13               #6=       $5                   ?0                  	;0
	9   486  JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
	10  487  GOTO/253                  ?0        ?17                  ?8                  	;0
	11  489  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'unlink'          	;1	<<9
	12  489  FETCH_CONSTANT/99         #7=       ?0                   11:'ARCHIVE_PATH'   	;16
	13  489  CONCAT/8                  #8=       #7                   16?1                	;0
	14  489  CONCAT/8                  #9=       #8                   14:'_.record'       	;0
	15  489  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
	16  489  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
	17  491  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'is_object'      	;1
	18  491  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	19  491  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	20  491  BOOL_NOT/13               #12=      $11                  ?0                  	;0
	21  491  JMPZ/43                   ?0        #12                  ?23                 	;0	>>23
	22  492  GOTO/253                  ?0        ?25                  ?17                 	;0
	23  494  INIT_METHOD_CALL/112      ?0        16?0                 18:'close_mysql'    	;0	<<21
	24  494  DO_FCALL/60               ?11       ?0                   ?0                  	;0
	25  496  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?47                  ?0                  	;0	>>47
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'eD8dbf4549416fA2'	;0
2   5    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
3   7    NOP/0                     ?0        ?0                   ?0                  	;0
4   44   GOTO/253                  ?0        ?70                  ?3                  	;0
5   46   INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'set_time_limit'  	;1
6   46   SEND_VAL_EX/116           ?80       6:0                  ?1                  	;0
7   46   DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
8   47   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'cli_set_process_title'	;1
9   47   ROPE_INIT/54              #6=       ?0                   9:'Record['         	;3
10  47   ROPE_ADD/55               #6=       #6                   16?0                	;1
11  47   ROPE_END/56               #5=       #6                   10:']'              	;2
12  47   SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
13  47   DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
14  49   NOP/0                     ?0        ?0                   ?0                  	;0
15  54   NOP/0                     ?0        ?0                   ?0                  	;0
16  77   NOP/0                     ?0        ?0                   ?0                  	;0
17  140  GOTO/253                  ?0        ?41                  ?11                 	;0
18  143  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'register_shutdown_function'	;1
19  143  SEND_VAL_EX/116           ?80       14:'shutdown'        ?1                  	;0
20  143  DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
21  144  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'str_replace'    	;3
22  144  SEND_VAL_EX/116           ?80       17:'\\'              ?1                  	;0
23  144  SEND_VAL_EX/116           ?96       18:'/'               ?2                  	;0
24  144  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'dirname'        	;1
25  144  FETCH_DIM_FUNC_ARG/93     $10=      16?1                 21:0                	;1
26  144  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
27  144  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
28  144  SEND_VAR_NO_REF_EX/50     ?112      $11                  ?3                  	;0
29  144  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
30  144  CONCAT/8                  #13=      $12                  22:'/../../www/init.php'	;0
31  144  INCLUDE_OR_EVAL/73        ?11       #13                  ?0                  	;8
32  145  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'intval'         	;1
33  145  FETCH_DIM_FUNC_ARG/93     $15=      16?1                 25:1                	;1
34  145  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
35  145  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
36  145  ASSIGN/38                 ?14       16?0                 $16                 	;0
37  146  INIT_FCALL/61             ?0        ?752                 26:'c7cc2f0dd6f71ebb'	;1
38  146  SEND_VAR/117              ?80       16?0                 ?1                  	;0
39  146  DO_FCALL/60               ?15       ?0                   ?0                  	;0
40  147  GOTO/253                  ?0        ?5                   ?27                 	;0
41  150  NOP/0                     ?0        ?0                   ?0                  	;0
42  197  NOP/0                     ?0        ?0                   ?0                  	;0
43  209  NOP/0                     ?0        ?0                   ?0                  	;0
44  221  NOP/0                     ?0        ?0                   ?0                  	;0
45  235  NOP/0                     ?0        ?0                   ?0                  	;0
46  470  GOTO/253                  ?0        ?1                   ?28                 	;0
47  472  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'posix_getpwuid' 	;1	<<0
48  472  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'posix_geteuid'  	;0
49  472  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
50  472  SEND_VAR_NO_REF_EX/50     ?80       $19                  ?1                  	;0
51  472  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
52  472  FETCH_DIM_R/81            $21=      $20                  33:'name'           	;0
53  472  IS_NOT_EQUAL/18           #22=      $21                  34:'xui'            	;0
54  472  BOOL_NOT/13               #23=      #22                  ?0                  	;0
55  472  JMPZ/43                   ?0        #23                  ?57                 	;0	>>57
56  473  GOTO/253                  ?0        ?58                  ?35                 	;0
57  475  EXIT/79                   ?0        36:'Please run as XUI!
' ?0                  	;0	<<55
58  477  BEGIN_SILENCE/57          #24=      ?0                   ?0                  	;0
59  477  FETCH_R/80                $25=      37:'argc'            ?0                  	;268435456
60  477  END_SILENCE/58            ?0        #24                  ?0                  	;0
61  477  BOOL_NOT/13               #26=      $25                  ?0                  	;0
62  477  JMPNZ_EX/47               #26=      #26                  ?65                 	;0	>>65
63  477  IS_SMALLER_OR_EQUAL/20    #27=      16?2                 38:1                	;0
64  477  BOOL/52                   #26=      #27                  ?0                  	;0
65  477  BOOL_NOT/13               #28=      #26                  ?0                  	;0	<<62
66  477  JMPZ/43                   ?0        #28                  ?68                 	;0	>>68
67  478  GOTO/253                  ?0        ?18                  ?39                 	;0
68  480  EXIT/79                   ?0        40:0                 ?0                  	;0	<<66
69  481  GOTO/253                  ?0        ?18                  ?41                 	;0
70  483  NOP/0                     ?0        ?0                   ?0                  	;0
71  497  NOP/0                     ?0        42:1                 ?0                  	;4294967295
*/

?>