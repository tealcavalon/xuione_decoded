<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?15                  ?0                  	;0	>>15
1   5    EXIT/79                   ?0        ?0                   ?0                  	;0
2   7    GOTO/253                  ?0        ?124                 ?1                  	;0
3   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'basename'        	;1
4   9    SEND_VAL_EX/116           ?80       4:'admin\\session.php' ?1                  	;0
5   9    DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
6   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'basename'        	;1
7   9    FETCH_FUNC_ARG/92         $3=       7:'_SERVER'          ?0                  	;1
8   9    FETCH_DIM_FUNC_ARG/93     $4=       $3                   8:'SCRIPT_FILENAME' 	;1
9   9    SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
10  9    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
11  9    IS_EQUAL/17               #6=       $2                   $5                  	;0
12  9    JMPZ/43                   ?0        #6                   ?14                 	;0	>>14
13  10   GOTO/253                  ?0        ?103                 ?9                  	;0
14  12   GOTO/253                  ?0        ?88                  ?10                 	;0	<<12
15  14   ASSIGN/38                 ?5        16?0                 11:60               	;0	<<0
16  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'defined'        	;1
17  15   SEND_VAL_EX/116           ?80       14:'TMP_PATH'        ?1                  	;0
18  15   DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
19  15   JMPZ/43                   ?0        $8                   ?21                 	;0	>>21
20  16   GOTO/253                  ?0        ?25                  ?15                 	;0
21  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'define'         	;2	<<19
22  18   SEND_VAL_EX/116           ?80       18:'TMP_PATH'        ?1                  	;0
23  18   SEND_VAL_EX/116           ?96       19:'/home/xui/tmp/'  ?2                  	;0
24  18   DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
25  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'session_status' 	;0
26  20   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
27  20   FETCH_CONSTANT/99         #11=      ?0                   22:'PHP_SESSION_NONE'	;16
28  20   IS_EQUAL/17               #12=      $10                  #11                 	;0
29  20   BOOL_NOT/13               #13=      #12                  ?0                  	;0
30  20   JMPZ/43                   ?0        #13                  ?32                 	;0	>>32
31  21   GOTO/253                  ?0        ?57                  ?25                 	;0
32  23   GOTO/253                  ?0        ?55                  ?26                 	;0	<<30
33  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'basename'       	;1
34  25   SEND_VAL_EX/116           ?80       29:'admin\\session.php' ?1                  	;0
35  25   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
36  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'basename'       	;1
37  25   FETCH_FUNC_ARG/92         $15=      32:'_SERVER'         ?0                  	;1
38  25   FETCH_DIM_FUNC_ARG/93     $16=      $15                  33:'SCRIPT_FILENAME'	;1
39  25   SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
40  25   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
41  25   IS_EQUAL/17               #18=      $14                  $17                 	;0
42  25   JMPZ/43                   ?0        #18                  ?44                 	;0	>>44
43  26   GOTO/253                  ?0        ?50                  ?34                 	;0
44  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'time'           	;0	<<42
45  28   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
46  28   FETCH_W/83                $19=      35:'_SESSION'        ?0                  	;0
47  28   ASSIGN_DIM/147            ?18       $19                  36:'last_activity'  	;0
48  28   OP_DATA/137               ?0        $21                  ?0                  	;0
49  29   GOTO/253                  ?0        ?2                   ?39                 	;0
50  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'json_encode'    	;1
51  31   SEND_VAL_EX/116           ?80       42:array (
  'result' => true,
) ?1                  	;0
52  31   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
53  31   ECHO/40                   ?0        $22                  ?0                  	;0
54  32   GOTO/253                  ?0        ?1                   ?43                 	;0
55  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'session_start'  	;0
56  34   DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
57  36   FETCH_IS/89               $24=      46:'_SESSION'        ?0                  	;0
58  36   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  47:'hash'           	;33554432
59  36   JMPZ_EX/46                #25=      #25                  ?63                 	;0	>>63
60  36   FETCH_IS/89               $26=      48:'_SESSION'        ?0                  	;0
61  36   ISSET_ISEMPTY_DIM_OBJ/115 #27=      $26                  49:'last_activity'  	;33554432
62  36   BOOL/52                   #25=      #27                  ?0                  	;0
63  36   JMPZ_EX/46                #25=      #25                  ?72                 	;0	>>72	<<59
64  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'time'           	;0
65  36   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
66  36   FETCH_R/80                $29=      52:'_SESSION'        ?0                  	;0
67  36   FETCH_DIM_R/81            $30=      $29                  53:'last_activity'  	;0
68  36   SUB/2                     #31=      $28                  $30                 	;0
69  36   MUL/3                     #32=      16?0                 54:60               	;0
70  36   IS_SMALLER/19             #33=      #32                  #31                 	;0
71  36   BOOL/52                   #25=      #33                  ?0                  	;0
72  36   BOOL_NOT/13               #34=      #25                  ?0                  	;0	<<63
73  36   JMPZ/43                   ?0        #34                  ?75                 	;0	>>75
74  37   GOTO/253                  ?0        ?117                 ?55                 	;0
75  39   FE_RESET_R/77             $35=      56:array (
  0 => 'hash',
  1 => 'ip',
  2 => 'code',
  3 => 'verify',
  4 => 'last_activity',
) ?86                 	;0	<<73
76  39   FE_FETCH_R/78             ?0        $35                  16?1                	;86	>>86	<<85
77  40   FETCH_IS/89               $36=      57:'_SESSION'        ?0                  	;0
78  40   ISSET_ISEMPTY_DIM_OBJ/115 #37=      $36                  16?1                	;33554432
79  40   BOOL_NOT/13               #38=      #37                  ?0                  	;0
80  40   JMPZ/43                   ?0        #38                  ?83                 	;0	>>83
81  41   NOP/0                     ?0        ?0                   ?0                  	;1
82  41   GOTO/253                  ?0        ?85                  ?58                 	;0
83  43   FETCH_UNSET/95            $39=      59:'_SESSION'        ?0                  	;0	<<80
84  43   UNSET_DIM/75              ?0        $39                  16?1                	;0
85  45   JMP/42                    ?0        ?76                  ?0                  	;0	>>76
86  45   FE_FREE/127               ?0        $35                  ?0                  	;0	<<75
87  48   GOTO/253                  ?0        ?108                 ?60                 	;0
88  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'header'         	;1
89  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'urlencode'      	;1
90  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'basename'       	;2
91  50   FETCH_FUNC_ARG/92         $40=      67:'_SERVER'         ?0                  	;1
92  50   FETCH_DIM_FUNC_ARG/93     $41=      $40                  68:'REQUEST_URI'    	;1
93  50   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
94  50   SEND_VAL_EX/116           ?96       69:'.php'            ?2                  	;0
95  50   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
96  50   SEND_VAR_NO_REF_EX/50     ?80       $42                  ?1                  	;0
97  50   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
98  50   CONCAT/8                  #44=      70:'Location: ./login?referrer=' $43                 	;0
99  50   SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
100 50   DO_FCALL_BY_NAME/131      ?43       ?0                   ?0                  	;0
101 51   EXIT/79                   ?0        ?0                   ?0                  	;0
102 52   GOTO/253                  ?0        ?124                 ?71                 	;0
103 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'json_encode'    	;1
104 54   SEND_VAL_EX/116           ?80       74:array (
  'result' => false,
) ?1                  	;0
105 54   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
106 54   ECHO/40                   ?0        $46                  ?0                  	;0
107 55   GOTO/253                  ?0        ?123                 ?75                 	;0
108 57   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'session_status' 	;0
109 57   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
110 57   FETCH_CONSTANT/99         #48=      ?0                   78:'PHP_SESSION_NONE'	;16
111 57   IS_IDENTICAL/15           #49=      $47                  #48                 	;0
112 57   BOOL_NOT/13               #50=      #49                  ?0                  	;0
113 57   JMPZ/43                   ?0        #50                  ?115                	;0	>>115
114 58   GOTO/253                  ?0        ?117                 ?81                 	;0
115 60   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'session_start'  	;0	<<113
116 60   DO_FCALL_BY_NAME/131      ?49       ?0                   ?0                  	;0
117 63   FETCH_IS/89               $52=      84:'_SESSION'        ?0                  	;0
118 63   ISSET_ISEMPTY_DIM_OBJ/115 #53=      $52                  85:'hash'           	;33554432
119 63   BOOL_NOT/13               #54=      #53                  ?0                  	;0
120 63   JMPZ/43                   ?0        #54                  ?122                	;0	>>122
121 64   GOTO/253                  ?0        ?3                   ?86                 	;0
122 66   GOTO/253                  ?0        ?33                  ?87                 	;0	<<120
123 68   EXIT/79                   ?0        ?0                   ?0                  	;0
124 71   GOTO/253                  ?0        ?125                 ?88                 	;0
125 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'session_write_close'	;0
126 73   DO_FCALL_BY_NAME/131      ?53       ?0                   ?0                  	;0
127 74   NOP/0                     ?0        91:1                 ?0                  	;4294967295
*/

?>