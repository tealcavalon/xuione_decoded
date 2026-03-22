<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?123                 ?0                  	;0	>>123
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'f8A524f607010c5F'	;1
2   5    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
3   5    DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
4   5    ASSIGN/38                 ?1        16?0                 $9                  	;0
5   6    GOTO/253                  ?0        ?203                 ?3                  	;0
6   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'array_map'       	;2
7   8    SEND_VAL_EX/116           ?80       7:'intval'           ?1                  	;0
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'array_merge'     	;2
9   8    FETCH_DIM_R/81            $12=      16?2                 10:'id'             	;0
10  8    INIT_ARRAY/71             #13=      $12                  ?0                  	;4
11  8    SEND_VAL_EX/116           ?80       #13                  ?1                  	;0
12  8    FETCH_DIM_FUNC_ARG/93     $14=      16?3                 11:'all_reports'    	;2
13  8    SEND_VAR_EX/66            ?96       $14                  ?2                  	;0
14  8    DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
15  8    SEND_VAR_NO_REF_EX/50     ?96       $15                  ?2                  	;0
16  8    DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
17  8    ASSIGN_DIM/147            ?2        16?2                 4:'reports'         	;0
18  8    OP_DATA/137               ?0        $16                  ?0                  	;0
19  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'dFac1B11d332C193'	;0
20  9    DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
21  9    ASSIGN/38                 ?9        16?4                 $17                 	;0
22  10   FETCH_DIM_R/81            $19=      16?6                 14:'ip_subnet_match'	;0
23  10   JMPZ/43                   ?0        $19                  ?55                 	;0	>>55
24  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'implode'        	;2
25  10   SEND_VAL_EX/116           ?80       17:'.'               ?1                  	;0
26  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'array_slice'    	;3
27  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'explode'        	;2
28  10   SEND_VAL_EX/116           ?80       22:'.'               ?1                  	;0
29  10   FETCH_FUNC_ARG/92         $20=      23:'_SESSION'        ?0                  	;2
30  10   FETCH_DIM_FUNC_ARG/93     $21=      $20                  24:'rip'            	;2
31  10   SEND_VAR_EX/66            ?96       $21                  ?2                  	;0
32  10   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
33  10   SEND_VAR_NO_REF_EX/50     ?80       $22                  ?1                  	;0
34  10   SEND_VAL_EX/116           ?96       25:0                 ?2                  	;0
35  10   SEND_VAL_EX/116           ?112      26:-1                ?3                  	;0
36  10   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
37  10   SEND_VAR_NO_REF_EX/50     ?96       $23                  ?2                  	;0
38  10   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
39  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'implode'        	;2
40  10   SEND_VAL_EX/116           ?80       29:'.'               ?1                  	;0
41  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'array_slice'    	;3
42  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'explode'        	;2
43  10   SEND_VAL_EX/116           ?80       34:'.'               ?1                  	;0
44  10   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
45  10   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
46  10   SEND_VAR_NO_REF_EX/50     ?80       $25                  ?1                  	;0
47  10   SEND_VAL_EX/116           ?96       35:0                 ?2                  	;0
48  10   SEND_VAL_EX/116           ?112      36:-1                ?3                  	;0
49  10   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
50  10   SEND_VAR_NO_REF_EX/50     ?96       $26                  ?2                  	;0
51  10   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
52  10   IS_EQUAL/17               #28=      $24                  $27                 	;0
53  10   QM_ASSIGN/22              #29=      #28                  ?0                  	;0
54  10   JMP/42                    ?0        ?59                  ?0                  	;0	>>59
55  10   FETCH_R/80                $30=      37:'_SESSION'        ?0                  	;0	<<23
56  10   FETCH_DIM_R/81            $31=      $30                  38:'rip'            	;0
57  10   IS_EQUAL/17               #32=      $31                  16?4                	;0
58  10   QM_ASSIGN/22              #29=      #32                  ?0                  	;0
59  10   ASSIGN/38                 ?24       16?5                 #29                 	;0	<<54
60  11   BOOL_NOT/13               #34=      16?2                 ?0                  	;0
61  11   JMPNZ_EX/47               #34=      #34                  ?64                 	;0	>>64
62  11   BOOL_NOT/13               #35=      16?3                 ?0                  	;0
63  11   BOOL/52                   #34=      #35                  ?0                  	;0
64  11   JMPNZ_EX/47               #34=      #34                  ?68                 	;0	>>68	<<61
65  11   FETCH_DIM_R/81            $36=      16?3                 39:'is_reseller'    	;0
66  11   BOOL_NOT/13               #37=      $36                  ?0                  	;0
67  11   BOOL/52                   #34=      #37                  ?0                  	;0
68  11   JMPNZ_EX/47               #34=      #34                  ?74                 	;0	>>74	<<64
69  11   BOOL_NOT/13               #38=      16?5                 ?0                  	;0
70  11   JMPZ_EX/46                #38=      #38                  ?73                 	;0	>>73
71  11   FETCH_DIM_R/81            $39=      16?6                 40:'ip_logout'      	;0
72  11   BOOL/52                   #38=      $39                  ?0                  	;0
73  11   BOOL/52                   #34=      #38                  ?0                  	;0	<<70
74  11   JMPNZ_EX/47               #34=      #34                  ?86                 	;0	>>86	<<68
75  11   FETCH_R/80                $40=      41:'_SESSION'        ?0                  	;0
76  11   FETCH_DIM_R/81            $41=      $40                  42:'rverify'        	;0
77  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'md5'            	;1
78  11   FETCH_DIM_R/81            $42=      16?2                 45:'username'       	;0
79  11   CONCAT/8                  #43=      $42                  46:'||'             	;0
80  11   FETCH_DIM_R/81            $44=      16?2                 47:'password'       	;0
81  11   CONCAT/8                  #45=      #43                  $44                 	;0
82  11   SEND_VAL_EX/116           ?80       #45                  ?1                  	;0
83  11   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
84  11   IS_NOT_EQUAL/18           #47=      $41                  $46                 	;0
85  11   BOOL/52                   #34=      #47                  ?0                  	;0
86  11   JMPZ/43                   ?0        #34                  ?88                 	;0	>>88	<<74
87  12   GOTO/253                  ?0        ?143                 ?48                 	;0
88  14   FETCH_R/80                $48=      49:'_SESSION'        ?0                  	;0	<<86
89  14   FETCH_DIM_R/81            $49=      $48                  50:'rip'            	;0
90  14   IS_NOT_EQUAL/18           #50=      $49                  16?4                	;0
91  14   JMPZ_EX/46                #50=      #50                  ?95                 	;0	>>95
92  14   FETCH_DIM_R/81            $51=      16?6                 51:'ip_logout'      	;0
93  14   BOOL_NOT/13               #52=      $51                  ?0                  	;0
94  14   BOOL/52                   #50=      #52                  ?0                  	;0
95  14   BOOL_NOT/13               #53=      #50                  ?0                  	;0	<<91
96  14   JMPZ/43                   ?0        #53                  ?98                 	;0	>>98
97  15   GOTO/253                  ?0        ?142                 ?52                 	;0
98  17   GOTO/253                  ?0        ?139                 ?53                 	;0	<<96
99  20   FETCH_STATIC_PROP_IS/176  $54=      54:'rRequest'        55:'XUI'            	;0
100 20   ISSET_ISEMPTY_DIM_OBJ/115 #55=      $54                  57:'status'         	;33554432
101 20   BOOL_NOT/13               #56=      #55                  ?0                  	;0
102 20   JMPZ/43                   ?0        #56                  ?104                	;0	>>104
103 21   GOTO/253                  ?0        ?203                 ?58                 	;0
104 23   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'intval'         	;1	<<102
105 23   FETCH_STATIC_PROP_FUNC_ARG/177 $57=      61:'rRequest'        62:'XUI'            	;1
106 23   FETCH_DIM_FUNC_ARG/93     $58=      $57                  64:'status'         	;1
107 23   SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
108 23   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
109 23   ASSIGN/38                 ?51       16?7                 $59                 	;0
110 24   FETCH_STATIC_PROP_R/173   $61=      65:'rRequest'        66:'XUI'            	;0
111 24   ASSIGN/38                 ?53       16?1                 $61                 	;0
112 25   UNSET_DIM/75              ?0        16?1                 68:'status'         	;0
113 26   GOTO/253                  ?0        ?1                   ?69                 	;0
114 28   UNSET_CV/196              ?0        16?3                 ?0                  	;0
115 29   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'DBC3e29f55C945ab'	;1
116 29   SEND_VAL_EX/116           ?80       72:'reseller'        ?1                  	;0
117 29   DO_FCALL_BY_NAME/131      ?54       ?0                   ?0                  	;0
118 30   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'header'         	;1
119 30   SEND_VAL_EX/116           ?80       75:'Location: ./index' ?1                  	;0
120 30   DO_FCALL_BY_NAME/131      ?55       ?0                   ?0                  	;0
121 31   EXIT/79                   ?0        ?0                   ?0                  	;0
122 33   GOTO/253                  ?0        ?99                  ?76                 	;0
123 35   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'defined'        	;1	<<0
124 35   SEND_VAL_EX/116           ?80       79:'XUI_HOME'        ?1                  	;0
125 35   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
126 35   JMPZ/43                   ?0        $65                  ?128                	;0	>>128
127 36   GOTO/253                  ?0        ?132                 ?80                 	;0
128 38   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'define'         	;2	<<126
129 38   SEND_VAL_EX/116           ?80       83:'XUI_HOME'        ?1                  	;0
130 38   SEND_VAL_EX/116           ?96       84:'/home/xui/'      ?2                  	;0
131 38   DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
132 40   FETCH_CONSTANT/99         #67=      ?0                   85:'XUI_HOME'       	;16
133 40   CONCAT/8                  #68=      #67                  88:'includes/admin.php'	;0
134 40   INCLUDE_OR_EVAL/73        ?60       #68                  ?0                  	;16
135 41   BOOL_NOT/13               #70=      16?8                 ?0                  	;0
136 41   JMPZ/43                   ?0        #70                  ?138                	;0	>>138
137 42   GOTO/253                  ?0        ?183                 ?89                 	;0
138 44   GOTO/253                  ?0        ?181                 ?90                 	;0	<<136
139 46   FETCH_W/83                $71=      91:'_SESSION'        ?0                  	;0
140 46   ASSIGN_DIM/147            ?63       $71                  92:'rip'            	;0
141 46   OP_DATA/137               ?0        16?4                 ?0                  	;0
142 48   GOTO/253                  ?0        ?122                 ?93                 	;0
143 50   UNSET_CV/196              ?0        16?2                 ?0                  	;0
144 51   GOTO/253                  ?0        ?114                 ?94                 	;0
145 53   INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'date_default_timezone_set'	;1
146 53   FETCH_DIM_FUNC_ARG/93     $73=      16?2                 97:'timezone'       	;1
147 53   SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
148 53   DO_FCALL_BY_NAME/131      ?65       ?0                   ?0                  	;0
149 55   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'setcookie'      	;3
150 55   SEND_VAL_EX/116           ?80       100:'hue'            ?1                  	;0
151 55   FETCH_DIM_FUNC_ARG/93     $75=      16?2                 101:'hue'           	;2
152 55   SEND_VAR_EX/66            ?96       $75                  ?2                  	;0
153 55   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'time'          	;0
154 55   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
155 55   ADD/1                     #77=      $76                  104:604800          	;0
156 55   SEND_VAL_EX/116           ?112      #77                  ?3                  	;0
157 55   DO_FCALL_BY_NAME/131      ?69       ?0                   ?0                  	;0
158 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'setcookie'     	;3
159 56   SEND_VAL_EX/116           ?80       107:'theme'          ?1                  	;0
160 56   FETCH_DIM_FUNC_ARG/93     $79=      16?2                 108:'theme'         	;2
161 56   SEND_VAR_EX/66            ?96       $79                  ?2                  	;0
162 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'time'          	;0
163 56   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
164 56   ADD/1                     #81=      $80                  111:604800          	;0
165 56   SEND_VAL_EX/116           ?112      #81                  ?3                  	;0
166 56   DO_FCALL_BY_NAME/131      ?73       ?0                   ?0                  	;0
167 57   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'array_merge'   	;2
168 57   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'ACeb5CfE4194f4F0'	;1
169 57   FETCH_DIM_FUNC_ARG/93     $83=      16?2                 116:'member_group_id'	;1
170 57   SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
171 57   DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
172 57   SEND_VAR_NO_REF_EX/50     ?80       $84                  ?1                  	;0
173 57   INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'a0bb5aDf0f9ccC8e'	;1
174 57   FETCH_DIM_FUNC_ARG/93     $85=      16?2                 119:'id'            	;1
175 57   SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
176 57   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
177 57   SEND_VAR_NO_REF_EX/50     ?96       $86                  ?2                  	;0
178 57   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
179 57   ASSIGN/38                 ?79       16?3                 $87                 	;0
180 58   GOTO/253                  ?0        ?6                   ?120                	;0
181 60   ASSIGN_DIM/147            ?80       16?6                 121:'js_navigate'   	;0
182 60   OP_DATA/137               ?0        122:0                ?0                  	;0
183 62   FETCH_IS/89               $90=      123:'_SESSION'       ?0                  	;0
184 62   ISSET_ISEMPTY_DIM_OBJ/115 #91=      $90                  124:'reseller'      	;33554432
185 62   BOOL_NOT/13               #92=      #91                  ?0                  	;0
186 62   JMPZ/43                   ?0        #92                  ?188                	;0	>>188
187 63   GOTO/253                  ?0        ?99                  ?125                	;0
188 65   INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'ba89228Dc958cE05'	;1	<<186
189 65   FETCH_FUNC_ARG/92         $93=      128:'_SESSION'       ?0                  	;1
190 65   FETCH_DIM_FUNC_ARG/93     $94=      $93                  129:'reseller'      	;1
191 65   SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
192 65   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
193 65   ASSIGN/38                 ?87       16?2                 $95                 	;0
194 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'strlen'        	;1
195 66   FETCH_DIM_FUNC_ARG/93     $97=      16?2                 132:'timezone'      	;1
196 66   SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
197 66   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
198 66   IS_SMALLER/19             #99=      133:0                $98                 	;0
199 66   BOOL_NOT/13               #100=     #99                  ?0                  	;0
200 66   JMPZ/43                   ?0        #100                 ?202                	;0	>>202
201 67   GOTO/253                  ?0        ?149                 ?134                	;0
202 69   GOTO/253                  ?0        ?145                 ?135                	;0	<<200
203 72   NOP/0                     ?0        136:1                ?0                  	;4294967295
*/

?>