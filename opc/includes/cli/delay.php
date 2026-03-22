<?php


function C23a9e3BD783fff0()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  8   BIND_GLOBAL/168           ?0        16?0                 0:'ee6d1fc5d801b43f'	;0
	1  8   BIND_GLOBAL/168           ?0        16?1                 1:'cbf541d72500f722'	;0
	2  9   INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'shell_exec'      	;1
	3  9   FETCH_CONSTANT/99         #2=       ?0                   4:'DELAY_PATH'      	;16
	4  9   CONCAT/8                  #3=       7:'find '            #2                  	;0
	5  9   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'intval'          	;1
	6  9   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	7  9   DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	8  9   CONCAT/8                  #5=       #3                   $4                  	;0
	9  9   CONCAT/8                  #6=       #5                   10:'_*'             	;0
	10 9   ROPE_INIT/54              #8=       ?0                   11:' -type f -cmin +'	;3
	11 9   ROPE_ADD/55               #8=       #8                   16?1                	;1
	12 9   ROPE_END/56               #7=       #8                   12:' -delete'       	;2
	13 9   CONCAT/8                  #10=      #6                   #7                  	;0
	14 9   SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
	15 9   DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
	16 10  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
	*/
}

function AA260198262d3A85($Ac1adc37e57ef7cd)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  12  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  14  BIND_GLOBAL/168           ?0        16?1                 0:'ee6d1fc5d801b43f'	;0
	2  15  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_exists'     	;1
	3  15  FETCH_CONSTANT/99         #2=       ?0                   3:'STREAMS_PATH'    	;16
	4  15  CONCAT/8                  #3=       #2                   16?1                	;0
	5  15  CONCAT/8                  #4=       #3                   6:'_'               	;0
	6  15  CONCAT/8                  #5=       #4                   16?0                	;0
	7  15  CONCAT/8                  #6=       #5                   7:'.ts'             	;0
	8  15  SEND_VAL_EX/116           ?80       #6                   ?1                  	;0
	9  15  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	10 15  BOOL_NOT/13               #8=       $7                   ?0                  	;0
	11 15  JMPZ/43                   ?0        #8                   ?13                 	;0	>>13
	12 16  GOTO/253                  ?0        ?21                  ?8                  	;0
	13 18  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'unlink'          	;1	<<11
	14 18  FETCH_CONSTANT/99         #9=       ?0                   11:'STREAMS_PATH'   	;16
	15 18  CONCAT/8                  #10=      #9                   16?1                	;0
	16 18  CONCAT/8                  #11=      #10                  14:'_'              	;0
	17 18  CONCAT/8                  #12=      #11                  16?0                	;0
	18 18  CONCAT/8                  #13=      #12                  15:'.ts'            	;0
	19 18  SEND_VAL_EX/116           ?80       #13                  ?1                  	;0
	20 18  DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
	21 20  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'file_exists'    	;1
	22 20  FETCH_CONSTANT/99         #15=      ?0                   18:'STREAMS_PATH'   	;16
	23 20  CONCAT/8                  #16=      #15                  16?1                	;0
	24 20  CONCAT/8                  #17=      #16                  21:'_'              	;0
	25 20  CONCAT/8                  #18=      #17                  16?0                	;0
	26 20  CONCAT/8                  #19=      #18                  22:'.ts.enc'        	;0
	27 20  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
	28 20  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	29 20  BOOL_NOT/13               #21=      $20                  ?0                  	;0
	30 20  JMPZ/43                   ?0        #21                  ?32                 	;0	>>32
	31 21  GOTO/253                  ?0        ?40                  ?23                 	;0
	32 23  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'unlink'         	;1	<<30
	33 23  FETCH_CONSTANT/99         #22=      ?0                   26:'STREAMS_PATH'   	;16
	34 23  CONCAT/8                  #23=      #22                  16?1                	;0
	35 23  CONCAT/8                  #24=      #23                  29:'_'              	;0
	36 23  CONCAT/8                  #25=      #24                  16?0                	;0
	37 23  CONCAT/8                  #26=      #25                  30:'.ts.enc'        	;0
	38 23  SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
	39 23  DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
	40 25  NOP/0                     ?0        31:NULL              ?0                  	;4294967295
	*/
}

function D182BFAfec02c67F($Da063ce7d50d331c, &$B0b66e80093fc832, $F238092e4e4d82a9)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  27  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  27  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2  27  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3  29  JMP/42                    ?0        ?41                  ?0                  	;0	>>41
	4  32  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_exists'     	;1
	5  32  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	6  32  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	7  32  BOOL_NOT/13               #6=       $5                   ?0                  	;0
	8  32  JMPZ/43                   ?0        #6                   ?10                 	;0	>>10
	9  33  GOTO/253                  ?0        ?23                  ?3                  	;0
	10 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'array_merge'     	;2	<<8
	11 35  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	12 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'A4D45E1f279652D4'	;2
	13 35  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	14 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'count'           	;1
	15 35  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	16 35  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	17 35  SUB/2                     #8=       16?2                 $7                  	;0
	18 35  SEND_VAL_EX/116           ?96       #8                   ?2                  	;0
	19 35  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	20 35  SEND_VAR_NO_REF_EX/50     ?96       $9                   ?2                  	;0
	21 35  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	22 35  ASSIGN/38                 ?6        16?3                 $10                 	;0
	23 37  RETURN/62                 ?0        16?3                 ?0                  	;0
	24 38  GOTO/253                  ?0        ?70                  ?10                 	;0
	25 41  IS_SMALLER/19             #12=      16?4                 16?2                	;0
	26 41  JMPZ_EX/46                #12=      #12                  ?32                 	;0	>>32
	27 41  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'count'          	;1
	28 41  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	29 41  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	30 41  IS_SMALLER/19             #14=      16?4                 $13                 	;0
	31 41  BOOL/52                   #12=      #14                  ?0                  	;0
	32 41  BOOL_NOT/13               #15=      #12                  ?0                  	;0	<<26
	33 41  JMPZ/43                   ?0        #15                  ?35                 	;0	>>35
	34 42  GOTO/253                  ?0        ?58                  ?13                 	;0
	35 44  FETCH_DIM_R/81            $17=      16?1                 16?4                	;0	<<33
	36 44  ASSIGN_DIM/147            ?11       16?3                 ?4397406            	;0
	37 44  OP_DATA/137               ?0        $17                  ?0                  	;0
	38 46  POST_INC/36               #18=      16?4                 ?0                  	;0
	39 46  FREE/70                   ?0        #18                  ?0                  	;0
	40 47  GOTO/253                  ?0        ?57                  ?14                 	;0
	41 49  ASSIGN/38                 ?14       16?3                 15:array (
)        	;0	<<3
	42 50  ISSET_ISEMPTY_CV/197      #20=      16?1                 ?0                  	;16777216
	43 50  JMPZ/43                   ?0        #20                  ?45                 	;0	>>45
	44 51  GOTO/253                  ?0        ?4                   ?16                 	;0
	45 53  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'array_shift'    	;1	<<43
	46 53  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	47 53  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	48 53  ASSIGN/38                 ?17       16?3                 $21                 	;0
	49 54  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'unlink'         	;1
	50 54  FETCH_CONSTANT/99         #23=      ?0                   21:'DELAY_PATH'     	;16
	51 54  FETCH_DIM_R/81            $24=      16?3                 24:'file'           	;0
	52 54  CONCAT/8                  #25=      #23                  $24                 	;0
	53 54  SEND_VAL_EX/116           ?80       #25                  ?1                  	;0
	54 54  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
	55 55  ASSIGN/38                 ?22       16?4                 25:0                	;0
	56 56  GOTO/253                  ?0        ?25                  ?26                 	;0
	57 58  GOTO/253                  ?0        ?25                  ?27                 	;0
	58 60  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'array_values'   	;1
	59 60  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	60 60  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	61 60  ASSIGN/38                 ?24       16?1                 $28                 	;0
	62 61  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'array_shift'    	;1
	63 61  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	64 61  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
	65 61  ASSIGN/38                 ?26       16?3                 $30                 	;0
	66 62  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'a18CE7E6880756e6'	;1
	67 62  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	68 62  DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
	69 63  GOTO/253                  ?0        ?4                   ?34                 	;0
	70 65  NOP/0                     ?0        35:NULL              ?0                  	;4294967295
	*/
}

function a18CE7e6880756E6($B0b66e80093fc832)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  67  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  69  BIND_GLOBAL/168           ?0        16?1                 0:'ad242636af36d5a7'	;0
	2  70  ISSET_ISEMPTY_CV/197      #4=       16?0                 ?0                  	;16777216
	3  70  BOOL_NOT/13               #5=       #4                   ?0                  	;0
	4  70  JMPZ/43                   ?0        #5                   ?6                  	;0	>>6
	5  71  GOTO/253                  ?0        ?10                  ?1                  	;0
	6  73  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'unlink'          	;1	<<4
	7  73  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	8  73  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
	9  74  GOTO/253                  ?0        ?29                  ?4                  	;0
	10 76  ASSIGN/38                 ?3        16?2                 5:''                	;0
	11 77  FE_RESET_R/77             $8=       16?0                 ?22                 	;0
	12 77  FE_FETCH_R/78             ?0        $8                   16?3                	;22	>>22	<<21
	13 78  FETCH_DIM_R/81            $9=       16?3                 6:'seconds'         	;0
	14 78  ROPE_INIT/54              #12=      ?0                   7:'#EXTINF:'        	;5
	15 78  ROPE_ADD/55               #12=      #12                  $9                  	;1
	16 78  FETCH_DIM_R/81            $10=      16?3                 8:'file'            	;0
	17 78  ROPE_ADD/55               #12=      #12                  9:',
'              	;2
	18 78  ROPE_ADD/55               #12=      #12                  $10                 	;3
	19 78  ROPE_END/56               #11=      #12                  10:'
'              	;4
	20 78  ASSIGN_CONCAT/30          ?11       16?2                 #11                 	;0
	21 79  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
	22 79  FE_FREE/127               ?0        $8                   ?0                  	;0	<<11
	23 82  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'file_put_contents'	;3
	24 82  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	25 82  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	26 82  FETCH_CONSTANT/99         #16=      ?0                   13:'LOCK_EX'        	;16
	27 82  SEND_VAL_EX/116           ?112      #16                  ?3                  	;0
	28 82  DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
	29 84  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
	*/
}

function A4D45e1f279652D4($Aac64ae34ff57fc4, $ed06f1a4ada62a86)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   86   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   86   RECV_INIT/64              16?1=     ?2                   0:0                 	;0
	2   88   GOTO/253                  ?0        ?60                  ?1                  	;0
	3   90   INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'count'           	;1
	4   90   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	5   90   DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	6   90   IS_EQUAL/17               #9=       $8                   16?1                	;0
	7   90   BOOL_NOT/13               #10=      #9                   ?0                  	;0
	8   90   JMPZ/43                   ?0        #10                  ?10                 	;0	>>10
	9   91   GOTO/253                  ?0        ?11                  ?4                  	;0
	10  93   GOTO/253                  ?0        ?79                  ?5                  	;0	<<8
	11  95   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'trim'            	;1
	12  95   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'fgets'           	;1
	13  95   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	14  95   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	15  95   SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
	16  95   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	17  95   ASSIGN/38                 ?5        16?3                 $12                 	;0
	18  96   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'stristr'        	;2
	19  96   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	20  96   SEND_VAL_EX/116           ?96       12:'EXTINF'          ?2                  	;0
	21  96   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	22  96   BOOL_NOT/13               #15=      $14                  ?0                  	;0
	23  96   JMPZ/43                   ?0        #15                  ?25                 	;0	>>25
	24  97   GOTO/253                  ?0        ?78                  ?13                 	;0
	25  99   GOTO/253                  ?0        ?26                  ?14                 	;0	<<23
	26  101  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'explode'        	;2
	27  101  SEND_VAL_EX/116           ?80       17:':'               ?1                  	;0
	28  101  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	29  101  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	30  101  FETCH_LIST/98             $17=      $16                  18:0                	;0
	31  101  ASSIGN/38                 ?10       16?5                 $17                 	;0
	32  101  FETCH_LIST/98             $19=      $16                  19:1                	;0
	33  101  ASSIGN/38                 ?12       16?6                 $19                 	;0
	34  101  FREE/70                   ?0        $16                  ?0                  	;0
	35  102  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'rtrim'          	;2
	36  102  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	37  102  SEND_VAL_EX/116           ?96       22:','               ?2                  	;0
	38  102  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	39  102  ASSIGN/38                 ?14       16?6                 $21                 	;0
	40  103  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'trim'           	;1
	41  103  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'fgets'          	;1
	42  103  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	43  103  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	44  103  SEND_VAR_NO_REF_EX/50     ?80       $23                  ?1                  	;0
	45  103  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
	46  103  ASSIGN/38                 ?17       16?7                 $24                 	;0
	47  104  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'file_exists'    	;1
	48  104  FETCH_CONSTANT/99         #26=      ?0                   29:'DELAY_PATH'     	;16
	49  104  CONCAT/8                  #27=      #26                  16?7                	;0
	50  104  SEND_VAL_EX/116           ?80       #27                  ?1                  	;0
	51  104  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	52  104  BOOL_NOT/13               #29=      $28                  ?0                  	;0
	53  104  JMPZ/43                   ?0        #29                  ?55                 	;0	>>55
	54  105  GOTO/253                  ?0        ?78                  ?32                 	;0
	55  107  INIT_ARRAY/71             #31=      16?6                 33:'seconds'        	;10	<<53
	56  107  ADD_ARRAY_ELEMENT/72      #31=      16?7                 34:'file'           	;0
	57  107  ASSIGN_DIM/147            ?22       16?2                 ?4397406            	;0
	58  107  OP_DATA/137               ?0        #31                  ?0                  	;0
	59  108  GOTO/253                  ?0        ?78                  ?35                 	;0
	60  110  ASSIGN/38                 ?24       16?2                 36:array (
)        	;0
	61  111  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'file_exists'    	;1
	62  111  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	63  111  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	64  111  BOOL_NOT/13               #34=      $33                  ?0                  	;0
	65  111  JMPZ/43                   ?0        #34                  ?67                 	;0	>>67
	66  112  GOTO/253                  ?0        ?83                  ?39                 	;0
	67  114  INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'fopen'          	;2	<<65
	68  114  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	69  114  SEND_VAL_EX/116           ?96       42:'r'               ?2                  	;0
	70  114  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
	71  114  ASSIGN/38                 ?28       16?4                 $35                 	;0
	72  116  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'feof'           	;1
	73  116  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	74  116  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
	75  116  JMPZ/43                   ?0        $37                  ?77                 	;0	>>77
	76  117  GOTO/253                  ?0        ?79                  ?45                 	;0
	77  119  GOTO/253                  ?0        ?3                   ?46                 	;0	<<75
	78  123  GOTO/253                  ?0        ?72                  ?47                 	;0
	79  125  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'fclose'         	;1
	80  125  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	81  125  DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
	82  126  GOTO/253                  ?0        ?83                  ?50                 	;0
	83  129  RETURN/62                 ?0        16?2                 ?0                  	;0
	84  130  GOTO/253                  ?0        ?85                  ?51                 	;0
	85  132  NOP/0                     ?0        52:NULL              ?0                  	;4294967295
	*/
}

function C7cC2F0dD6f71eBB($ee6d1fc5d801b43f)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   154  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   156  JMP/42                    ?0        ?22                  ?0                  	;0	>>22
	2   159  GOTO/253                  ?0        ?11                  ?1                  	;0
	3   161  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'shell_exec'      	;1
	4   161  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'intval'          	;1
	5   161  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	6   161  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	7   161  CONCAT/8                  #4=       6:'kill -9 `ps -ef | grep \'XUIDelay\\[' $3                  	;0
	8   161  CONCAT/8                  #5=       #4                   7:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;0
	9   161  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
	10  161  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
	11  163  GOTO/253                  ?0        ?12                  ?8                  	;0
	12  165  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'file_put_contents'	;2
	13  165  FETCH_CONSTANT/99         #7=       ?0                   11:'STREAMS_PATH'   	;16
	14  165  CONCAT/8                  #8=       #7                   16?0                	;0
	15  165  CONCAT/8                  #9=       #8                   14:'_.monitor_delay'	;0
	16  165  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
	17  165  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'getmypid'       	;0
	18  165  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	19  165  SEND_VAR_NO_REF_EX/50     ?96       $10                  ?2                  	;0
	20  165  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
	21  166  GOTO/253                  ?0        ?85                  ?17                 	;0
	22  168  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'clearstatcache' 	;1	<<1
	23  168  SEND_VAL_EX/116           ?80       20:true              ?1                  	;0
	24  168  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
	25  169  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'file_exists'    	;1
	26  169  FETCH_CONSTANT/99         #13=      ?0                   23:'STREAMS_PATH'   	;16
	27  169  CONCAT/8                  #14=      #13                  16?0                	;0
	28  169  CONCAT/8                  #15=      #14                  26:'_.monitor_delay'	;0
	29  169  SEND_VAL_EX/116           ?80       #15                  ?1                  	;0
	30  169  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	31  169  BOOL_NOT/13               #17=      $16                  ?0                  	;0
	32  169  JMPZ/43                   ?0        #17                  ?34                 	;0	>>34
	33  170  GOTO/253                  ?0        ?44                  ?27                 	;0
	34  172  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'intval'         	;1	<<32
	35  172  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'file_get_contents'	;1
	36  172  FETCH_CONSTANT/99         #18=      ?0                   32:'STREAMS_PATH'   	;16
	37  172  CONCAT/8                  #19=      #18                  16?0                	;0
	38  172  CONCAT/8                  #20=      #19                  35:'_.monitor_delay'	;0
	39  172  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0
	40  172  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	41  172  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
	42  172  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
	43  172  ASSIGN/38                 ?20       16?1                 $22                 	;0
	44  174  ISSET_ISEMPTY_CV/197      #24=      16?1                 ?0                  	;16777216
	45  174  JMPZ/43                   ?0        #24                  ?47                 	;0	>>47
	46  175  GOTO/253                  ?0        ?3                   ?36                 	;0
	47  177  GOTO/253                  ?0        ?48                  ?37                 	;0	<<45
	48  179  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'file_exists'    	;1
	49  179  CONCAT/8                  #25=      40:'/proc/'          16?1                	;0
	50  179  SEND_VAL_EX/116           ?80       #25                  ?1                  	;0
	51  179  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	52  179  BOOL_NOT/13               #27=      $26                  ?0                  	;0
	53  179  JMPZ/43                   ?0        #27                  ?55                 	;0	>>55
	54  180  GOTO/253                  ?0        ?2                   ?41                 	;0
	55  182  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'trim'           	;1	<<53
	56  182  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'file_get_contents'	;1
	57  182  ROPE_INIT/54              #29=      ?0                   46:'/proc/'         	;3
	58  182  ROPE_ADD/55               #29=      #29                  16?1                	;1
	59  182  ROPE_END/56               #28=      #29                  47:'/cmdline'       	;2
	60  182  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	61  182  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	62  182  SEND_VAR_NO_REF_EX/50     ?80       $31                  ?1                  	;0
	63  182  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
	64  182  ASSIGN/38                 ?30       16?2                 $32                 	;0
	65  183  ROPE_INIT/54              #35=      ?0                   48:'XUIDelay['      	;3
	66  183  ROPE_ADD/55               #35=      #35                  16?0                	;1
	67  183  ROPE_END/56               #34=      #35                  49:']'              	;2
	68  183  IS_EQUAL/17               #37=      16?2                 #34                 	;0
	69  183  JMPZ_EX/46                #37=      #37                  ?74                 	;0	>>74
	70  183  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'is_numeric'     	;1
	71  183  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	72  183  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	73  183  BOOL/52                   #37=      $38                  ?0                  	;0
	74  183  JMPZ_EX/46                #37=      #37                  ?77                 	;0	>>77	<<69
	75  183  IS_SMALLER/19             #39=      52:0                 16?1                	;0
	76  183  BOOL/52                   #37=      #39                  ?0                  	;0
	77  183  BOOL_NOT/13               #40=      #37                  ?0                  	;0	<<74
	78  183  JMPZ/43                   ?0        #40                  ?80                 	;0	>>80
	79  184  GOTO/253                  ?0        ?84                  ?53                 	;0
	80  186  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'posix_kill'     	;2	<<78
	81  186  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	82  186  SEND_VAL_EX/116           ?96       56:9                 ?2                  	;0
	83  186  DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
	84  188  GOTO/253                  ?0        ?2                   ?57                 	;0
	85  190  NOP/0                     ?0        58:NULL              ?0                  	;4294967295
	*/
}

function ED8dBf4549416FA2()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   199  JMP/42                    ?0        ?113                 ?0                  	;0	>>113
	1   201  INIT_METHOD_CALL/112      ?0        16?1                 1:'get_row'         	;0
	2   201  DO_FCALL/60               $20=      ?0                   ?0                  	;0
	3   201  ASSIGN/38                 ?1        16?0                 $20                 	;0
	4   202  FETCH_DIM_R/81            $22=      16?0                 3:'delay_minutes'   	;0
	5   202  IS_EQUAL/17               #23=      $22                  4:0                 	;0
	6   202  JMPNZ_EX/47               #23=      #23                  ?9                  	;0	>>9
	7   202  FETCH_DIM_R/81            $24=      16?0                 5:'parent_id'       	;0
	8   202  BOOL/52                   #23=      $24                  ?0                  	;0
	9   202  BOOL_NOT/13               #25=      #23                  ?0                  	;0	<<6
	10  202  JMPZ/43                   ?0        #25                  ?12                 	;0	>>12
	11  203  GOTO/253                  ?0        ?13                  ?6                  	;0
	12  205  EXIT/79                   ?0        ?0                   ?0                  	;0	<<10
	13  207  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'file_exists'     	;1
	14  207  FETCH_CONSTANT/99         #26=      ?0                   9:'STREAMS_PATH'    	;16
	15  207  CONCAT/8                  #27=      #26                  16?3                	;0
	16  207  CONCAT/8                  #28=      #27                  12:'_.pid'          	;0
	17  207  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	18  207  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	19  207  JMPZ/43                   ?0        $29                  ?31                 	;0	>>31
	20  207  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'intval'         	;1
	21  207  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'file_get_contents'	;1
	22  207  FETCH_CONSTANT/99         #30=      ?0                   17:'STREAMS_PATH'   	;16
	23  207  CONCAT/8                  #31=      #30                  16?3                	;0
	24  207  CONCAT/8                  #32=      #31                  20:'_.pid'          	;0
	25  207  SEND_VAL_EX/116           ?80       #32                  ?1                  	;0
	26  207  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	27  207  SEND_VAR_NO_REF_EX/50     ?80       $33                  ?1                  	;0
	28  207  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	29  207  QM_ASSIGN/22              #35=      $34                  ?0                  	;0
	30  207  JMP/42                    ?0        ?33                  ?0                  	;0	>>33
	31  207  FETCH_DIM_R/81            $36=      16?0                 21:'pid'            	;0	<<19
	32  207  QM_ASSIGN/22              #35=      $36                  ?0                  	;0
	33  207  ASSIGN/38                 ?17       16?2                 #35                 	;0	<<30
	34  208  GOTO/253                  ?0        ?174                 ?22                 	;0
	35  211  INIT_STATIC_METHOD_CALL/113 ?0        23:'XUI'             25:'b4AB2a8eb0aa68EE'	;2
	36  211  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	37  211  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	38  211  DO_FCALL/60               $38=      ?0                   ?0                  	;0
	39  211  JMPZ_EX/46                #39=      $38                  ?44                 	;0	>>44
	40  211  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'file_exists'    	;1
	41  211  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	42  211  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	43  211  BOOL/52                   #39=      $40                  ?0                  	;0
	44  211  BOOL_NOT/13               #41=      #39                  ?0                  	;0	<<39
	45  211  JMPZ/43                   ?0        #41                  ?47                 	;0	>>47
	46  212  GOTO/253                  ?0        ?93                  ?29                 	;0
	47  214  IS_NOT_EQUAL/18           #42=      16?5                 16?6                	;0	<<45
	48  214  BOOL_NOT/13               #43=      #42                  ?0                  	;0
	49  214  JMPZ/43                   ?0        #43                  ?51                 	;0	>>51
	50  215  GOTO/253                  ?0        ?214                 ?30                 	;0
	51  217  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'file_exists'    	;1	<<49
	52  217  FETCH_CONSTANT/99         #44=      ?0                   33:'STREAMS_PATH'   	;16
	53  217  CONCAT/8                  #45=      #44                  16?3                	;0
	54  217  CONCAT/8                  #46=      #45                  36:'_.dur'          	;0
	55  217  SEND_VAL_EX/116           ?80       #46                  ?1                  	;0
	56  217  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
	57  217  BOOL_NOT/13               #48=      $47                  ?0                  	;0
	58  217  JMPZ/43                   ?0        #48                  ?60                 	;0	>>60
	59  218  GOTO/253                  ?0        ?139                 ?37                 	;0
	60  220  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'intval'         	;1	<<58
	61  220  INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'file_get_contents'	;1
	62  220  FETCH_CONSTANT/99         #49=      ?0                   42:'STREAMS_PATH'   	;16
	63  220  CONCAT/8                  #50=      #49                  16?3                	;0
	64  220  CONCAT/8                  #51=      #50                  45:'_.dur'          	;0
	65  220  SEND_VAL_EX/116           ?80       #51                  ?1                  	;0
	66  220  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	67  220  SEND_VAR_NO_REF_EX/50     ?80       $52                  ?1                  	;0
	68  220  DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
	69  220  ASSIGN/38                 ?34       16?7                 $53                 	;0
	70  221  GOTO/253                  ?0        ?130                 ?46                 	;0
	71  223  ISSET_ISEMPTY_DIM_OBJ/115 #55=      16?8                 47:'segments'       	;16777216
	72  223  JMPZ/43                   ?0        #55                  ?74                 	;0	>>74
	73  224  GOTO/253                  ?0        ?214                 ?48                 	;0
	74  226  ASSIGN/38                 ?36       16?9                 49:''               	;0	<<72
	75  227  ASSIGN/38                 ?37       16?10                50:0                	;0
	76  228  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'preg_match'     	;3
	77  228  SEND_VAL_EX/116           ?80       53:'/.*\\_(.*?)\\.ts/' ?1                  	;0
	78  228  FETCH_DIM_FUNC_ARG/93     $58=      16?8                 54:'segments'       	;2
	79  228  FETCH_DIM_FUNC_ARG/93     $59=      $58                  55:0                	;2
	80  228  FETCH_DIM_FUNC_ARG/93     $60=      $59                  56:'file'           	;2
	81  228  SEND_VAR_EX/66            ?96       $60                  ?2                  	;0
	82  228  SEND_VAR_EX/66            ?112      16?11                ?3                  	;0
	83  228  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
	84  228  BOOL_NOT/13               #62=      $61                  ?0                  	;0
	85  228  JMPZ/43                   ?0        #62                  ?87                 	;0	>>87
	86  229  GOTO/253                  ?0        ?226                 ?57                 	;0
	87  231  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'intval'         	;1	<<85
	88  231  FETCH_DIM_FUNC_ARG/93     $63=      16?11                60:1                	;1
	89  231  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
	90  231  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
	91  231  ASSIGN/38                 ?45       16?10                $64                 	;0
	92  232  GOTO/253                  ?0        ?226                 ?61                 	;0
	93  235  GOTO/253                  ?0        ?270                 ?62                 	;0
	94  237  INIT_METHOD_CALL/112      ?0        16?1                 63:'close_mysql'    	;0
	95  237  DO_FCALL/60               ?46       ?0                   ?0                  	;0
	96  238  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'intval'         	;1
	97  238  FETCH_DIM_FUNC_ARG/93     $67=      16?0                 67:'delay_minutes'  	;1
	98  238  SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
	99  238  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
	100 238  ADD/1                     #69=      $68                  68:5                	;0
	101 238  ASSIGN/38                 ?50       16?12                #69                 	;0
	102 239  INIT_FCALL/61             ?0        ?272                 69:'c23a9e3bd783fff0'	;0
	103 239  DO_FCALL/60               ?51       ?0                   ?0                  	;0
	104 240  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'intval'         	;1
	105 240  FETCH_STATIC_PROP_FUNC_ARG/177 $72=      72:'rSegmentSettings' 73:'XUI'            	;1
	106 240  FETCH_DIM_FUNC_ARG/93     $73=      $72                  75:'seg_list_size'  	;1
	107 240  SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
	108 240  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
	109 240  ADD/1                     #75=      $74                  76:5                	;0
	110 240  ASSIGN/38                 ?56       16?13                #75                 	;0
	111 241  ASSIGN/38                 ?57       16?14                77:array (
)        	;0
	112 242  GOTO/253                  ?0        ?154                 ?78                 	;0
	113 244  BIND_GLOBAL/168           ?0        16?1                 79:'b62d6460eb33ea07'	;0	<<0
	114 244  BIND_GLOBAL/168           ?0        16?3                 80:'ee6d1fc5d801b43f'	;0
	115 244  BIND_GLOBAL/168           ?0        16?12                81:'cbf541d72500f722'	;0
	116 245  INIT_METHOD_CALL/112      ?0        16?1                 82:'query'          	;3
	117 245  SEND_VAL_EX/116           ?80       84:'SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.id = ?' ?1                  	;0
	118 245  FETCH_CONSTANT/99         #78=      ?0                   85:'SERVER_ID'      	;16
	119 245  SEND_VAL_EX/116           ?96       #78                  ?2                  	;0
	120 245  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
	121 245  DO_FCALL/60               ?59       ?0                   ?0                  	;0
	122 246  INIT_METHOD_CALL/112      ?0        16?1                 88:'num_rows'       	;0
	123 246  DO_FCALL/60               $80=      ?0                   ?0                  	;0
	124 246  IS_SMALLER_OR_EQUAL/20    #81=      $80                  90:0                	;0
	125 246  BOOL_NOT/13               #82=      #81                  ?0                  	;0
	126 246  JMPZ/43                   ?0        #82                  ?128                	;0	>>128
	127 247  GOTO/253                  ?0        ?129                 ?91                 	;0
	128 249  EXIT/79                   ?0        ?0                   ?0                  	;0	<<126
	129 251  GOTO/253                  ?0        ?1                   ?92                 	;0
	130 253  FETCH_STATIC_PROP_R/173   $83=      93:'rSegmentSettings' 94:'XUI'            	;0
	131 253  FETCH_DIM_R/81            $84=      $83                  96:'seg_time'       	;0
	132 253  IS_SMALLER/19             #85=      $84                  16?7                	;0
	133 253  BOOL_NOT/13               #86=      #85                  ?0                  	;0
	134 253  JMPZ/43                   ?0        #86                  ?136                	;0	>>136
	135 254  GOTO/253                  ?0        ?139                 ?97                 	;0
	136 256  FETCH_STATIC_PROP_W/174   $87=      98:'rSegmentSettings' 99:'XUI'            	;0	<<134
	137 256  ASSIGN_DIM/147            ?68       $87                  101:'seg_time'      	;0
	138 256  OP_DATA/137               ?0        16?7                 ?0                  	;0
	139 259  INIT_ARRAY/71             #89=      102:''               103:'#EXTM3U'       	;18
	140 259  ADD_ARRAY_ELEMENT/72      #89=      104:3                105:'#EXT-X-VERSION'	;0
	141 259  ADD_ARRAY_ELEMENT/72      #89=      106:'0'              107:'#EXT-X-MEDIA-SEQUENCE'	;0
	142 259  FETCH_STATIC_PROP_R/173   $90=      108:'rSegmentSettings' 109:'XUI'           	;0
	143 259  FETCH_DIM_R/81            $91=      $90                  111:'seg_time'      	;0
	144 259  ADD_ARRAY_ELEMENT/72      #89=      $91                  112:'#EXT-X-TARGETDURATION'	;0
	145 259  INIT_ARRAY/71             #92=      #89                  113:'vars'          	;10
	146 259  INIT_FCALL/61             ?0        ?608                 114:'d182bfafec02c67f'	;3
	147 259  SEND_VAR/117              ?80       16?4                 ?1                  	;0
	148 259  SEND_REF/67               ?96       16?14                ?2                  	;0
	149 259  SEND_VAR/117              ?112      16?13                ?3                  	;0
	150 259  DO_FCALL/60               $93=      ?0                   ?0                  	;0
	151 259  ADD_ARRAY_ELEMENT/72      #92=      $93                  115:'segments'      	;0
	152 259  ASSIGN/38                 ?74       16?8                 #92                 	;0
	153 260  GOTO/253                  ?0        ?71                  ?116                	;0
	154 262  INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'file_exists'   	;1
	155 262  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	156 262  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
	157 262  BOOL_NOT/13               #96=      $95                  ?0                  	;0
	158 262  JMPZ/43                   ?0        #96                  ?160                	;0	>>160
	159 263  GOTO/253                  ?0        ?165                 ?119                	;0
	160 265  INIT_FCALL/61             ?0        ?704                 120:'a4d45e1f279652d4'	;2	<<158
	161 265  SEND_VAR/117              ?80       16?15                ?1                  	;0
	162 265  SEND_VAL/65               ?96       121:-1               ?2                  	;0
	163 265  DO_FCALL/60               $97=      ?0                   ?0                  	;0
	164 265  ASSIGN/38                 ?78       16?14                $97                 	;0
	165 267  ASSIGN/38                 ?79       16?6                 122:NULL            	;0
	166 268  INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'md5'           	;1
	167 268  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'file_get_contents'	;1
	168 268  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	169 268  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
	170 268  SEND_VAR_NO_REF_EX/50     ?80       $100                 ?1                  	;0
	171 268  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
	172 268  ASSIGN/38                 ?82       16?5                 $101                	;0
	173 269  GOTO/253                  ?0        ?35                  ?127                	;0
	174 271  FETCH_CONSTANT/99         #103=     ?0                   128:'STREAMS_PATH'  	;16
	175 271  CONCAT/8                  #104=     #103                 16?3                	;0
	176 271  CONCAT/8                  #105=     #104                 131:'_.m3u8'        	;0
	177 271  ASSIGN/38                 ?86       16?16                #105                	;0
	178 272  FETCH_CONSTANT/99         #107=     ?0                   132:'DELAY_PATH'    	;16
	179 272  CONCAT/8                  #108=     #107                 16?3                	;0
	180 272  CONCAT/8                  #109=     #108                 135:'_.m3u8'        	;0
	181 272  ASSIGN/38                 ?90       16?4                 #109                	;0
	182 273  FETCH_CONSTANT/99         #111=     ?0                   136:'DELAY_PATH'    	;16
	183 273  CONCAT/8                  #112=     #111                 16?3                	;0
	184 273  CONCAT/8                  #113=     #112                 139:'_.m3u8_old'    	;0
	185 273  ASSIGN/38                 ?94       16?15                #113                	;0
	186 274  INIT_METHOD_CALL/112      ?0        16?1                 140:'query'         	;4
	187 274  SEND_VAL_EX/116           ?80       142:'UPDATE `streams_servers` SET delay_pid = ? WHERE stream_id = ? AND server_id = ?' ?1                  	;0
	188 274  INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'getmypid'      	;0
	189 274  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
	190 274  SEND_VAR_NO_REF_EX/50     ?96       $115                 ?2                  	;0
	191 274  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
	192 274  FETCH_CONSTANT/99         #116=     ?0                   145:'SERVER_ID'     	;16
	193 274  SEND_VAL_EX/116           ?128      #116                 ?4                  	;0
	194 274  DO_FCALL/60               ?97       ?0                   ?0                  	;0
	195 275  INIT_STATIC_METHOD_CALL/113 ?0        148:'XUI'            150:'CaC325153A658C37'	;1
	196 275  FETCH_DIM_FUNC_ARG/93     $118=     16?0                 152:'id'            	;1
	197 275  SEND_VAR_EX/66            ?80       $118                 ?1                  	;0
	198 275  DO_FCALL/60               ?99       ?0                   ?0                  	;0
	199 276  GOTO/253                  ?0        ?94                  ?153                	;0
	200 279  INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'file_put_contents'	;3
	201 279  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
	202 279  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	203 279  FETCH_CONSTANT/99         #120=     ?0                   156:'LOCK_EX'       	;16
	204 279  SEND_VAL_EX/116           ?112      #120                 ?3                  	;0
	205 279  DO_FCALL_BY_NAME/131      ?101      ?0                   ?0                  	;0
	206 280  ASSIGN/38                 ?102      16?5                 16?6                	;0
	207 281  INIT_FCALL/61             ?0        ?528                 159:'aa260198262d3a85'	;1
	208 281  SUB/2                     #123=     16?10                160:2               	;0
	209 281  SEND_VAL/65               ?80       #123                 ?1                  	;0
	210 281  DO_FCALL/60               ?104      ?0                   ?0                  	;0
	211 282  INIT_FCALL/61             ?0        ?272                 161:'c23a9e3bd783fff0'	;0
	212 282  DO_FCALL/60               ?105      ?0                   ?0                  	;0
	213 283  GOTO/253                  ?0        ?214                 ?162                	;0
	214 287  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'usleep'        	;1
	215 287  SEND_VAL_EX/116           ?80       165:1000             ?1                  	;0
	216 287  DO_FCALL_BY_NAME/131      ?106      ?0                   ?0                  	;0
	217 288  INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'md5'           	;1
	218 288  INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'file_get_contents'	;1
	219 288  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	220 288  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
	221 288  SEND_VAR_NO_REF_EX/50     ?80       $127                 ?1                  	;0
	222 288  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
	223 288  ASSIGN/38                 ?109      16?6                 $128                	;0
	224 289  GOTO/253                  ?0        ?35                  ?170                	;0
	225 290  GOTO/253                  ?0        ?93                  ?171                	;0
	226 293  FETCH_DIM_W/84            $130=     16?8                 172:'vars'          	;0
	227 293  ASSIGN_DIM/147            ?111      $130                 173:'#EXT-X-MEDIA-SEQUENCE'	;0
	228 293  OP_DATA/137               ?0        16?10                ?0                  	;0
	229 294  FETCH_DIM_R/81            $132=     16?8                 174:'vars'          	;0
	230 294  FE_RESET_R/77             $133=     $132                 ?245                	;0
	231 294  FE_FETCH_R/78             #134=     $133                 16?17               	;245	>>245	<<244
	232 294  ASSIGN/38                 ?115      16?18                #134                	;0
	233 295  ISSET_ISEMPTY_CV/197      #136=     16?17                ?0                  	;16777216
	234 295  BOOL_NOT/13               #137=     #136                 ?0                  	;0
	235 295  JMPZ/43                   ?0        #137                 ?241                	;0	>>241
	236 295  CONCAT/8                  #138=     16?18                175:':'             	;0
	237 295  CONCAT/8                  #139=     #138                 16?17               	;0
	238 295  CONCAT/8                  #140=     #139                 176:'
'             	;0
	239 295  QM_ASSIGN/22              #141=     #140                 ?0                  	;0
	240 295  JMP/42                    ?0        ?243                 ?0                  	;0	>>243
	241 295  CONCAT/8                  #142=     16?18                177:'
'             	;0	<<235
	242 295  QM_ASSIGN/22              #141=     #142                 ?0                  	;0
	243 295  ASSIGN_CONCAT/30          ?123      16?9                 #141                	;0	<<240
	244 296  JMP/42                    ?0        ?231                 ?0                  	;0	>>231
	245 296  FE_FREE/127               ?0        $133                 ?0                  	;0	<<230
	246 299  FETCH_DIM_R/81            $144=     16?8                 178:'segments'      	;0
	247 299  FE_RESET_R/77             $145=     $144                 ?268                	;0
	248 299  FE_FETCH_R/78             ?0        $145                 16?19               	;268	>>268	<<267
	249 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'copy'          	;2
	250 300  FETCH_CONSTANT/99         #146=     ?0                   181:'DELAY_PATH'    	;16
	251 300  FETCH_DIM_R/81            $147=     16?19                184:'file'          	;0
	252 300  CONCAT/8                  #148=     #146                 $147                	;0
	253 300  SEND_VAL_EX/116           ?80       #148                 ?1                  	;0
	254 300  FETCH_CONSTANT/99         #149=     ?0                   185:'STREAMS_PATH'  	;16
	255 300  FETCH_DIM_R/81            $150=     16?19                188:'file'          	;0
	256 300  CONCAT/8                  #151=     #149                 $150                	;0
	257 300  SEND_VAL_EX/116           ?96       #151                 ?2                  	;0
	258 300  DO_FCALL_BY_NAME/131      ?132      ?0                   ?0                  	;0
	259 301  FETCH_DIM_R/81            $153=     16?19                189:'seconds'       	;0
	260 301  ROPE_INIT/54              #156=     ?0                   190:'#EXTINF:'      	;5
	261 301  ROPE_ADD/55               #156=     #156                 $153                	;1
	262 301  FETCH_DIM_R/81            $154=     16?19                191:'file'          	;0
	263 301  ROPE_ADD/55               #156=     #156                 192:',
'            	;2
	264 301  ROPE_ADD/55               #156=     #156                 $154                	;3
	265 301  ROPE_END/56               #155=     #156                 193:'
'             	;4
	266 301  ASSIGN_CONCAT/30          ?139      16?9                 #155                	;0
	267 302  JMP/42                    ?0        ?248                 ?0                  	;0	>>248
	268 302  FE_FREE/127               ?0        $145                 ?0                  	;0	<<247
	269 304  GOTO/253                  ?0        ?200                 ?194                	;0
	270 306  NOP/0                     ?0        195:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   312  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   313  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   313  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   313  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   313  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   313  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   314  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   316  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   316  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   318  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?28                  ?0                  	;0	>>28
1   6    NOP/0                     ?0        ?0                   ?0                  	;0
2   12   NOP/0                     ?0        ?0                   ?0                  	;0
3   27   NOP/0                     ?0        ?0                   ?0                  	;0
4   67   NOP/0                     ?0        ?0                   ?0                  	;0
5   86   NOP/0                     ?0        ?0                   ?0                  	;0
6   133  GOTO/253                  ?0        ?51                  ?1                  	;0
7   136  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'intval'          	;1
8   136  FETCH_DIM_FUNC_ARG/93     $4=       16?1                 4:1                 	;1
9   136  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
10  136  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
11  136  ASSIGN/38                 ?2        16?0                 $5                  	;0
12  137  ASSIGN/38                 ?3        16?2                 5:0                 	;0
13  138  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'register_shutdown_function'	;1
14  138  SEND_VAL_EX/116           ?80       8:'shutdown'         ?1                  	;0
15  138  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
16  139  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'str_replace'     	;3
17  139  SEND_VAL_EX/116           ?80       11:'\\'              ?1                  	;0
18  139  SEND_VAL_EX/116           ?96       12:'/'               ?2                  	;0
19  139  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'dirname'        	;1
20  139  FETCH_DIM_FUNC_ARG/93     $9=       16?1                 15:0                	;1
21  139  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
22  139  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
23  139  SEND_VAR_NO_REF_EX/50     ?112      $10                  ?3                  	;0
24  139  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
25  139  CONCAT/8                  #12=      $11                  16:'/../../www/init.php'	;0
26  139  INCLUDE_OR_EVAL/73        ?9        #12                  ?0                  	;8
27  140  GOTO/253                  ?0        ?53                  ?17                 	;0
28  142  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'posix_getpwuid' 	;1	<<0
29  142  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'posix_geteuid'  	;0
30  142  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
31  142  SEND_VAR_NO_REF_EX/50     ?80       $14                  ?1                  	;0
32  142  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
33  142  FETCH_DIM_R/81            $16=      $15                  22:'name'           	;0
34  142  IS_NOT_EQUAL/18           #17=      $16                  23:'xui'            	;0
35  142  BOOL_NOT/13               #18=      #17                  ?0                  	;0
36  142  JMPZ/43                   ?0        #18                  ?38                 	;0	>>38
37  143  GOTO/253                  ?0        ?39                  ?24                 	;0
38  145  EXIT/79                   ?0        25:'Please run as XUI!
' ?0                  	;0	<<36
39  147  BEGIN_SILENCE/57          #19=      ?0                   ?0                  	;0
40  147  FETCH_R/80                $20=      26:'argc'            ?0                  	;268435456
41  147  END_SILENCE/58            ?0        #19                  ?0                  	;0
42  147  BOOL_NOT/13               #21=      $20                  ?0                  	;0
43  147  JMPNZ_EX/47               #21=      #21                  ?46                 	;0	>>46
44  147  IS_SMALLER_OR_EQUAL/20    #22=      16?3                 27:1                	;0
45  147  BOOL/52                   #21=      #22                  ?0                  	;0
46  147  BOOL_NOT/13               #23=      #21                  ?0                  	;0	<<43
47  147  JMPZ/43                   ?0        #23                  ?49                 	;0	>>49
48  148  GOTO/253                  ?0        ?7                   ?28                 	;0
49  150  EXIT/79                   ?0        29:0                 ?0                  	;0	<<47
50  151  GOTO/253                  ?0        ?7                   ?30                 	;0
51  154  NOP/0                     ?0        ?0                   ?0                  	;0
52  191  GOTO/253                  ?0        ?69                  ?31                 	;0
53  193  INIT_FCALL/61             ?0        ?752                 32:'c7cc2f0dd6f71ebb'	;1
54  193  SEND_VAR/117              ?80       16?0                 ?1                  	;0
55  193  DO_FCALL/60               ?20       ?0                   ?0                  	;0
56  194  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'set_time_limit' 	;1
57  194  SEND_VAL_EX/116           ?80       35:0                 ?1                  	;0
58  194  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
59  195  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'cli_set_process_title'	;1
60  195  ROPE_INIT/54              #27=      ?0                   38:'XUIDelay['      	;3
61  195  ROPE_ADD/55               #27=      #27                  16?0                	;1
62  195  ROPE_END/56               #26=      #27                  39:']'              	;2
63  195  SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
64  195  DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
65  197  NOP/0                     ?0        ?0                   ?0                  	;0
66  307  INIT_FCALL/61             ?0        ?2640                40:'ed8dbf4549416fa2'	;0
67  307  DO_FCALL/60               ?26       ?0                   ?0                  	;0
68  308  GOTO/253                  ?0        ?1                   ?41                 	;0
69  310  NOP/0                     ?0        ?0                   ?0                  	;0
70  319  NOP/0                     ?0        42:1                 ?0                  	;4294967295
*/

?>