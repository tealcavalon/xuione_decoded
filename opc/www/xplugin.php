<?php


function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   275  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   275  BIND_GLOBAL/168           ?0        16?1                 1:'f76e05a7b2c4a341'	;0
	2   276  BOOL_NOT/13               #2=       16?1                 ?0                  	;0
	3   276  JMPZ/43                   ?0        #2                   ?5                  	;0	>>5
	4   277  GOTO/253                  ?0        ?7                   ?2                  	;0
	5   279  INIT_STATIC_METHOD_CALL/113 ?0        3:'XUI'              5:'aeea5d3137274f80'	;0	<<3
	6   279  DO_FCALL/60               ?1        ?0                   ?0                  	;0
	7   281  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'is_object'       	;1
	8   281  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	9   281  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	10  281  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	11  281  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
	12  282  GOTO/253                  ?0        ?15                  ?9                  	;0
	13  284  INIT_METHOD_CALL/112      ?0        16?0                 10:'close_mysql'    	;0	<<11
	14  284  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	15  286  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?20                  ?0                  	;0	>>20
1   10   GOTO/253                  ?0        ?188                 ?1                  	;0
2   13   GOTO/253                  ?0        ?160                 ?2                  	;0
3   15   ASSIGN_DIM/147            ?0        16?0                 3:'message'         	;0
4   15   OP_DATA/137               ?0        4:array (
)          ?0                  	;0
5   16   FETCH_DIM_R/81            $27=      16?1                 7:'command2'        	;0
6   16   FETCH_DIM_W/84            $25=      16?0                 5:'message'         	;0
7   16   ASSIGN_DIM/147            ?2        $25                  6:'title'           	;0
8   16   OP_DATA/137               ?0        $27                  ?0                  	;0
9   17   GOTO/253                  ?0        ?156                 ?8                  	;0
10  19   FETCH_DIM_R/81            $29=      16?1                 10:'type'           	;0
11  19   CAST/21                   #30=      $29                  ?0                  	;4
12  19   ASSIGN_DIM/147            ?4        16?0                 9:'block_telnet'    	;0
13  19   OP_DATA/137               ?0        #30                  ?0                  	;0
14  21   GOTO/253                  ?0        ?477                 ?11                 	;0
15  23   FETCH_DIM_R/81            $32=      16?1                 13:'type'           	;0
16  23   CAST/21                   #33=      $32                  ?0                  	;4
17  23   ASSIGN_DIM/147            ?7        16?0                 12:'block_ssh'      	;0
18  23   OP_DATA/137               ?0        #33                  ?0                  	;0
19  24   GOTO/253                  ?0        ?477                 ?14                 	;0
20  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'register_shutdown_function'	;1	<<0
21  26   SEND_VAL_EX/116           ?80       17:'shutdown'        ?1                  	;0
22  26   DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
23  27   INCLUDE_OR_EVAL/73        ?11       18:'init.php'        ?0                  	;8
24  28   ASSIGN/38                 ?12       16?2                 19:true             	;0
25  29   FETCH_STATIC_PROP_R/173   $37=      20:'rSettings'       21:'XUI'            	;0
26  29   FETCH_DIM_R/81            $38=      $37                  23:'disable_enigma2'	;0
27  29   BOOL_NOT/13               #39=      $38                  ?0                  	;0
28  29   JMPZ/43                   ?0        #39                  ?30                 	;0	>>30
29  30   GOTO/253                  ?0        ?427                 ?24                 	;0
30  32   ASSIGN/38                 ?16       16?2                 25:false            	;0	<<28
31  33   GOTO/253                  ?0        ?424                 ?26                 	;0
32  35   ASSIGN/38                 ?17       16?2                 27:false            	;0
33  36   FETCH_STATIC_PROP_R/173   $42=      28:'rRequest'        29:'XUI'            	;0
34  36   FETCH_DIM_R/81            $43=      $42                  31:'pversion'       	;0
35  36   IS_NOT_EQUAL/18           #44=      $43                  32:'0.0.1'          	;0
36  36   BOOL_NOT/13               #45=      #44                  ?0                  	;0
37  36   JMPZ/43                   ?0        #45                  ?39                 	;0	>>39
38  37   GOTO/253                  ?0        ?64                  ?33                 	;0
39  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'json_encode'    	;1	<<37
40  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'strtoupper'     	;1
41  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'implode'        	;2
42  39   SEND_VAL_EX/116           ?80       40:':'               ?1                  	;0
43  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'str_split'      	;2
44  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'substr'         	;3
45  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'md5'            	;1
46  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'mt_rand'        	;0
47  39   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
48  39   SEND_VAR_NO_REF_EX/50     ?80       $46                  ?1                  	;0
49  39   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
50  39   SEND_VAR_NO_REF_EX/50     ?80       $47                  ?1                  	;0
51  39   SEND_VAL_EX/116           ?96       49:0                 ?2                  	;0
52  39   SEND_VAL_EX/116           ?112      50:12                ?3                  	;0
53  39   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
54  39   SEND_VAR_NO_REF_EX/50     ?80       $48                  ?1                  	;0
55  39   SEND_VAL_EX/116           ?96       51:2                 ?2                  	;0
56  39   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
57  39   SEND_VAR_NO_REF_EX/50     ?96       $49                  ?2                  	;0
58  39   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
59  39   SEND_VAR_NO_REF_EX/50     ?80       $50                  ?1                  	;0
60  39   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
61  39   SEND_VAR_NO_REF_EX/50     ?80       $51                  ?1                  	;0
62  39   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
63  39   ECHO/40                   ?0        $52                  ?0                  	;0
64  41   EXIT/79                   ?0        ?0                   ?0                  	;0
65  42   GOTO/253                  ?0        ?316                 ?52                 	;0
66  44   FETCH_DIM_W/84            $53=      16?3                 53:'details'        	;0
67  44   ASSIGN_DIM/147            ?30       $53                  54:'token'          	;0
68  44   OP_DATA/137               ?0        16?4                 ?0                  	;0
69  45   FETCH_DIM_R/81            $57=      16?5                 57:'user_info'      	;0
70  45   FETCH_DIM_R/81            $58=      $57                  58:'username'       	;0
71  45   FETCH_DIM_W/84            $55=      16?3                 55:'details'        	;0
72  45   ASSIGN_DIM/147            ?32       $55                  56:'username'       	;0
73  45   OP_DATA/137               ?0        $58                  ?0                  	;0
74  46   FETCH_DIM_R/81            $61=      16?5                 61:'user_info'      	;0
75  46   FETCH_DIM_R/81            $62=      $61                  62:'password'       	;0
76  46   FETCH_DIM_W/84            $59=      16?3                 59:'details'        	;0
77  46   ASSIGN_DIM/147            ?36       $59                  60:'password'       	;0
78  46   OP_DATA/137               ?0        $62                  ?0                  	;0
79  47   FETCH_DIM_W/84            $63=      16?3                 63:'details'        	;0
80  47   ASSIGN_DIM/147            ?40       $63                  64:'watchdog_seconds'	;0
81  47   OP_DATA/137               ?0        16?6                 ?0                  	;0
82  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'header'         	;1
83  48   SEND_VAL_EX/116           ?80       67:'Content-Type: application/json' ?1                  	;0
84  48   DO_FCALL_BY_NAME/131      ?41       ?0                   ?0                  	;0
85  49   GOTO/253                  ?0        ?466                 ?68                 	;0
86  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'generateError'  	;1
87  51   SEND_VAL_EX/116           ?80       71:'E2_WATCHDOG_TIMEOUT' ?1                  	;0
88  51   DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
89  53   FETCH_STATIC_PROP_IS/176  $67=      72:'rRequest'        73:'XUI'            	;0
90  53   FETCH_DIM_IS/90           $68=      $67                  75:'page'           	;0
91  53   COALESCE/169              #69=      $68                  ?93                 	;0
92  53   QM_ASSIGN/22              #69=      76:''                ?0                  	;0
93  53   ASSIGN/38                 ?46       16?7                 #69                 	;0
94  54   ISSET_ISEMPTY_CV/197      #71=      16?7                 ?0                  	;16777216
95  54   JMPZ/43                   ?0        #71                  ?97                 	;0	>>97
96  55   GOTO/253                  ?0        ?189                 ?77                 	;0
97  57   IS_EQUAL/17               #72=      16?7                 78:'file'           	;0	<<95
98  57   BOOL_NOT/13               #73=      #72                  ?0                  	;0
99  57   JMPZ/43                   ?0        #73                  ?101                	;0	>>101
100 58   GOTO/253                  ?0        ?1                   ?79                 	;0
101 60   GOTO/253                  ?0        ?364                 ?80                 	;0	<<99
102 62   FETCH_STATIC_PROP_IS/176  $74=      81:'rRequest'        82:'XUI'            	;0
103 62   ISSET_ISEMPTY_DIM_OBJ/115 #75=      $74                  84:'lversion'       	;33554432
104 62   JMPZ/43                   ?0        #75                  ?112                	;0	>>112
105 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'base64_decode'  	;1
106 62   FETCH_STATIC_PROP_FUNC_ARG/177 $76=      87:'rRequest'        88:'XUI'            	;1
107 62   FETCH_DIM_FUNC_ARG/93     $77=      $76                  90:'lversion'       	;1
108 62   SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
109 62   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
110 62   QM_ASSIGN/22              #79=      $78                  ?0                  	;0
111 62   JMP/42                    ?0        ?113                 ?0                  	;0	>>113
112 62   QM_ASSIGN/22              #79=      91:''                ?0                  	;0	<<104
113 62   ASSIGN/38                 ?56       16?8                 #79                 	;0	<<111
114 63   FETCH_STATIC_PROP_IS/176  $81=      92:'rRequest'        93:'XUI'            	;0
115 63   ISSET_ISEMPTY_DIM_OBJ/115 #82=      $81                  95:'dn'             	;16777216
116 63   BOOL_NOT/13               #83=      #82                  ?0                  	;0
117 63   JMPZ/43                   ?0        #83                  ?125                	;0	>>125
118 63   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'htmlentities'   	;1
119 63   FETCH_STATIC_PROP_FUNC_ARG/177 $84=      98:'rRequest'        99:'XUI'            	;1
120 63   FETCH_DIM_FUNC_ARG/93     $85=      $84                  101:'dn'            	;1
121 63   SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
122 63   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
123 63   QM_ASSIGN/22              #87=      $86                  ?0                  	;0
124 63   JMP/42                    ?0        ?126                 ?0                  	;0	>>126
125 63   QM_ASSIGN/22              #87=      102:'-'              ?0                  	;0	<<117
126 63   ASSIGN/38                 ?64       16?9                 #87                 	;0	<<124
127 64   FETCH_STATIC_PROP_IS/176  $89=      103:'rRequest'       104:'XUI'           	;0
128 64   ISSET_ISEMPTY_DIM_OBJ/115 #90=      $89                  106:'cmac'          	;16777216
129 64   BOOL_NOT/13               #91=      #90                  ?0                  	;0
130 64   JMPZ/43                   ?0        #91                  ?141                	;0	>>141
131 64   INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'htmlentities'  	;1
132 64   INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'strtoupper'    	;1
133 64   FETCH_STATIC_PROP_FUNC_ARG/177 $92=      111:'rRequest'       112:'XUI'           	;1
134 64   FETCH_DIM_FUNC_ARG/93     $93=      $92                  114:'cmac'          	;1
135 64   SEND_VAR_EX/66            ?80       $93                  ?1                  	;0
136 64   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
137 64   SEND_VAR_NO_REF_EX/50     ?80       $94                  ?1                  	;0
138 64   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
139 64   QM_ASSIGN/22              #96=      $95                  ?0                  	;0
140 64   JMP/42                    ?0        ?142                 ?0                  	;0	>>142
141 64   QM_ASSIGN/22              #96=      115:''               ?0                  	;0	<<130
142 64   ASSIGN/38                 ?73       16?10                #96                 	;0	<<140
143 65   ASSIGN/38                 ?74       16?3                 116:array (
)       	;0
144 66   INIT_STATIC_METHOD_CALL/113 ?0        117:'XUI'            119:'D504A468f5b7B970'	;1
145 66   INIT_ARRAY/71             #99=      121:NULL             122:'device_id'     	;10
146 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'strtoupper'    	;1
147 66   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
148 66   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
149 66   ADD_ARRAY_ELEMENT/72      #99=      $100                 125:'mac'           	;0
150 66   SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
151 66   DO_FCALL/60               $101=     ?0                   ?0                  	;0
152 66   ASSIGN/38                 $102=     16?5                 $101                	;0
153 66   JMPZ/43                   ?0        $102                 ?155                	;0	>>155
154 67   GOTO/253                  ?0        ?599                 ?126                	;0
155 69   GOTO/253                  ?0        ?588                 ?127                	;0	<<153
156 71   FETCH_DIM_R/81            $105=     16?1                 130:'command'       	;0
157 71   FETCH_DIM_W/84            $103=     16?0                 128:'message'       	;0
158 71   ASSIGN_DIM/147            ?80       $103                 129:'message'       	;0
159 71   OP_DATA/137               ?0        $105                 ?0                  	;0
160 73   INIT_METHOD_CALL/112      ?0        16?12                131:'query'         	;2
161 73   SEND_VAL_EX/116           ?80       133:'DELETE FROM `enigma2_actions` WHERE `id` = ?;' ?1                  	;0
162 73   FETCH_DIM_FUNC_ARG/93     $106=     16?1                 134:'id'            	;2
163 73   SEND_VAR_EX/66            ?96       $106                 ?2                  	;0
164 73   DO_FCALL/60               ?83       ?0                   ?0                  	;0
165 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'header'        	;1
166 75   SEND_VAL_EX/116           ?80       137:'Content-Type: application/json' ?1                  	;0
167 75   DO_FCALL_BY_NAME/131      ?84       ?0                   ?0                  	;0
168 76   GOTO/253                  ?0        ?274                 ?138                	;0
169 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'generateError' 	;1
170 78   SEND_VAL_EX/116           ?80       141:'E2_NO_TOKEN'    ?1                  	;0
171 78   DO_FCALL_BY_NAME/131      ?85       ?0                   ?0                  	;0
172 80   FETCH_STATIC_PROP_R/173   $110=     142:'rRequest'       143:'XUI'           	;0
173 80   FETCH_DIM_R/81            $111=     $110                 145:'token'         	;0
174 80   ASSIGN/38                 ?88       16?4                 $111                	;0
175 81   INIT_METHOD_CALL/112      ?0        16?12                146:'query'         	;4
176 81   SEND_VAL_EX/116           ?80       148:'SELECT * FROM enigma2_devices WHERE `token` = ? AND `public_ip` = ? AND `key_auth` = ? LIMIT 1;' ?1                  	;0
177 81   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
178 81   SEND_VAR_EX/66            ?112      16?13                ?3                  	;0
179 81   SEND_VAR_EX/66            ?128      16?14                ?4                  	;0
180 81   DO_FCALL/60               ?89       ?0                   ?0                  	;0
181 82   INIT_METHOD_CALL/112      ?0        16?12                149:'num_rows'      	;0
182 82   DO_FCALL/60               $114=     ?0                   ?0                  	;0
183 82   IS_SMALLER_OR_EQUAL/20    #115=     $114                 151:0               	;0
184 82   BOOL_NOT/13               #116=     #115                 ?0                  	;0
185 82   JMPZ/43                   ?0        #116                 ?187                	;0	>>187
186 83   GOTO/253                  ?0        ?349                 ?152                	;0
187 85   GOTO/253                  ?0        ?346                 ?153                	;0	<<185
188 87   GOTO/253                  ?0        ?280                 ?154                	;0
189 89   INIT_METHOD_CALL/112      ?0        16?12                155:'query'         	;4
190 89   SEND_VAL_EX/116           ?80       157:'UPDATE `enigma2_devices` SET `last_updated` = ?,`rc` = ? WHERE `device_id` = ?;' ?1                  	;0
191 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'time'          	;0
192 89   DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
193 89   SEND_VAR_NO_REF_EX/50     ?96       $117                 ?2                  	;0
194 89   FETCH_STATIC_PROP_FUNC_ARG/177 $118=     160:'rRequest'       161:'XUI'           	;3
195 89   FETCH_DIM_FUNC_ARG/93     $119=     $118                 163:'rc'            	;3
196 89   SEND_VAR_EX/66            ?112      $119                 ?3                  	;0
197 89   FETCH_DIM_FUNC_ARG/93     $120=     16?15                164:'device_id'     	;4
198 89   SEND_VAR_EX/66            ?128      $120                 ?4                  	;0
199 89   DO_FCALL/60               ?97       ?0                   ?0                  	;0
200 90   INIT_METHOD_CALL/112      ?0        16?12                165:'query'         	;2
201 90   SEND_VAL_EX/116           ?80       167:'SELECT * FROM `enigma2_actions` WHERE `device_id` = ?;' ?1                  	;0
202 90   FETCH_DIM_FUNC_ARG/93     $122=     16?15                168:'device_id'     	;2
203 90   SEND_VAR_EX/66            ?96       $122                 ?2                  	;0
204 90   DO_FCALL/60               ?99       ?0                   ?0                  	;0
205 91   ASSIGN/38                 ?100      16?0                 169:array (
)       	;0
206 92   GOTO/253                  ?0        ?566                 ?170                	;0
207 94   FETCH_DIM_R/81            $125=     16?1                 171:'key'           	;0
208 94   IS_EQUAL/17               #126=     $125                 172:'reboot_gui'    	;0
209 94   JMPZ/43                   ?0        #126                 ?211                	;0	>>211
210 95   GOTO/253                  ?0        ?228                 ?173                	;0
211 97   FETCH_DIM_R/81            $127=     16?1                 174:'key'           	;0	<<209
212 97   IS_EQUAL/17               #128=     $127                 175:'reboot'        	;0
213 97   JMPZ/43                   ?0        #128                 ?215                	;0	>>215
214 98   GOTO/253                  ?0        ?501                 ?176                	;0
215 100  FETCH_DIM_R/81            $129=     16?1                 177:'key'           	;0	<<213
216 100  IS_EQUAL/17               #130=     $129                 178:'update'        	;0
217 100  JMPZ/43                   ?0        #130                 ?219                	;0	>>219
218 101  GOTO/253                  ?0        ?478                 ?179                	;0
219 103  FETCH_DIM_R/81            $131=     16?1                 180:'key'           	;0	<<217
220 103  IS_EQUAL/17               #132=     $131                 181:'block_ssh'     	;0
221 103  JMPZ/43                   ?0        #132                 ?223                	;0	>>223
222 104  GOTO/253                  ?0        ?15                  ?182                	;0
223 106  FETCH_DIM_R/81            $133=     16?1                 183:'key'           	;0	<<221
224 106  IS_EQUAL/17               #134=     $133                 184:'block_telnet'  	;0
225 106  JMPZ/43                   ?0        #134                 ?227                	;0	>>227
226 107  GOTO/253                  ?0        ?458                 ?185                	;0
227 109  GOTO/253                  ?0        ?482                 ?186                	;0	<<225
228 112  ASSIGN_DIM/147            ?111      16?0                 187:'reboot_gui'    	;0
229 112  OP_DATA/137               ?0        188:1                ?0                  	;0
230 114  GOTO/253                  ?0        ?311                 ?189                	;0
231 116  GOTO/253                  ?0        ?309                 ?190                	;0
232 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'strtoupper'    	;1
233 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'md5'           	;1
234 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'uniqid'        	;2
235 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'rand'          	;0
236 119  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
237 119  SEND_VAR_NO_REF_EX/50     ?80       $136                 ?1                  	;0
238 119  SEND_VAL_EX/116           ?96       199:true             ?2                  	;0
239 119  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
240 119  SEND_VAR_NO_REF_EX/50     ?80       $137                 ?1                  	;0
241 119  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
242 119  SEND_VAR_NO_REF_EX/50     ?80       $138                 ?1                  	;0
243 119  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
244 119  ASSIGN/38                 ?116      16?4                 $139                	;0
245 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'mt_rand'       	;2
246 120  SEND_VAL_EX/116           ?80       202:60               ?1                  	;0
247 120  SEND_VAL_EX/116           ?96       203:70               ?2                  	;0
248 120  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
249 120  ASSIGN/38                 ?118      16?6                 $141                	;0
250 121  INIT_METHOD_CALL/112      ?0        16?12                204:'query'         	;15
251 121  SEND_VAL_EX/116           ?80       206:'UPDATE `enigma2_devices` SET `original_mac` = ?,`dns` = ?,`key_auth` = ?,`lversion` = ?,`watchdog_timeout` = ?,`modem_mac` = ?,`local_ip` = ?,`public_ip` = ?,`enigma_version` = ?,`cpu` = ?,`version` = ?,`token` = ?,`last_updated` = ? WHERE `device_id` = ?' ?1                  	;0
252 121  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
253 121  SEND_VAR_EX/66            ?112      16?9                 ?3                  	;0
254 121  SEND_VAR_EX/66            ?128      16?14                ?4                  	;0
255 121  SEND_VAR_EX/66            ?144      16?8                 ?5                  	;0
256 121  SEND_VAR_EX/66            ?160      16?6                 ?6                  	;0
257 121  SEND_VAR_EX/66            ?176      16?16                ?7                  	;0
258 121  SEND_VAR_EX/66            ?192      16?17                ?8                  	;0
259 121  SEND_VAR_EX/66            ?208      16?13                ?9                  	;0
260 121  SEND_VAR_EX/66            ?224      16?18                ?10                 	;0
261 121  SEND_VAR_EX/66            ?240      16?19                ?11                 	;0
262 121  SEND_VAR_EX/66            ?256      16?20                ?12                 	;0
263 121  SEND_VAR_EX/66            ?272      16?4                 ?13                 	;0
264 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'time'          	;0
265 121  DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
266 121  SEND_VAR_NO_REF_EX/50     ?288      $143                 ?14                 	;0
267 121  FETCH_DIM_FUNC_ARG/93     $144=     16?5                 209:'enigma2'       	;15
268 121  FETCH_DIM_FUNC_ARG/93     $145=     $144                 210:'device_id'     	;15
269 121  SEND_VAR_EX/66            ?304      $145                 ?15                 	;0
270 121  DO_FCALL/60               ?122      ?0                   ?0                  	;0
271 122  ASSIGN_DIM/147            ?123      16?3                 211:'details'       	;0
272 122  OP_DATA/137               ?0        212:array (
)        ?0                  	;0
273 123  GOTO/253                  ?0        ?66                  ?213                	;0
274 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'json_encode'   	;1
275 125  INIT_ARRAY/71             #148=     216:true             217:'valid'         	;10
276 125  ADD_ARRAY_ELEMENT/72      #148=     16?0                 218:'data'          	;0
277 125  SEND_VAL_EX/116           ?80       #148                 ?1                  	;0
278 125  DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
279 125  EXIT/79                   ?0        $149                 ?0                  	;0
280 127  GOTO/253                  ?0        ?601                 ?219                	;0
281 129  FETCH_DIM_R/81            $150=     16?5                 220:'enigma2'       	;0
282 129  FETCH_DIM_R/81            $151=     $150                 221:'lock_device'   	;0
283 129  IS_EQUAL/17               #152=     $151                 222:1               	;0
284 129  BOOL_NOT/13               #153=     #152                 ?0                  	;0
285 129  JMPZ/43                   ?0        #153                 ?287                	;0	>>287
286 130  GOTO/253                  ?0        ?232                 ?223                	;0
287 132  FETCH_DIM_IS/90           $154=     16?5                 224:'enigma2'       	;0	<<285
288 132  ISSET_ISEMPTY_DIM_OBJ/115 #155=     $154                 225:'modem_mac'     	;16777216
289 132  BOOL_NOT/13               #156=     #155                 ?0                  	;0
290 132  JMPZ_EX/46                #156=     #156                 ?295                	;0	>>295
291 132  FETCH_DIM_R/81            $157=     16?5                 226:'enigma2'       	;0
292 132  FETCH_DIM_R/81            $158=     $157                 227:'modem_mac'     	;0
293 132  IS_NOT_IDENTICAL/16       #159=     $158                 16?16               	;0
294 132  BOOL/52                   #156=     #159                 ?0                  	;0
295 132  BOOL_NOT/13               #160=     #156                 ?0                  	;0	<<290
296 132  JMPZ/43                   ?0        #160                 ?298                	;0	>>298
297 133  GOTO/253                  ?0        ?308                 ?228                	;0
298 135  INIT_STATIC_METHOD_CALL/113 ?0        229:'XUI'            231:'a1feF6439C28608E'	;2	<<296
299 135  SEND_VAL_EX/116           ?80       233:NULL             ?1                  	;0
300 135  INIT_FCALL_BY_NAME/59     ?0        ?0                   234:'strtoupper'    	;1
301 135  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
302 135  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
303 135  SEND_VAR_NO_REF_EX/50     ?96       $161                 ?2                  	;0
304 135  DO_FCALL/60               ?138      ?0                   ?0                  	;0
305 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'generateError' 	;1
306 136  SEND_VAL_EX/116           ?80       238:'E2_DEVICE_LOCK_FAILED' ?1                  	;0
307 136  DO_FCALL_BY_NAME/131      ?139      ?0                   ?0                  	;0
308 138  GOTO/253                  ?0        ?232                 ?239                	;0
309 140  ASSIGN_DIM/147            ?140      16?0                 240:'screen'        	;0
310 140  OP_DATA/137               ?0        241:'1'              ?0                  	;0
311 142  GOTO/253                  ?0        ?2                   ?242                	;0
312 144  FETCH_DIM_R/81            $166=     16?1                 244:'command'       	;0
313 144  ASSIGN_DIM/147            ?141      16?0                 243:'ssh'           	;0
314 144  OP_DATA/137               ?0        $166                 ?0                  	;0
315 145  GOTO/253                  ?0        ?2                   ?245                	;0
316 148  NEW/68                    $167=     246:'Database'       ?96                 	;1
317 148  SEND_VAL_EX/116           ?80       248:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
318 148  DO_FCALL/60               ?144      ?8                   ?0                  	;0
319 148  ASSIGN/38                 ?145      16?12                $167                	;0
320 149  FETCH_STATIC_PROP_W/174   $170=     249:'db'             250:'XUI'           	;0
321 149  ASSIGN_REF/39             ?147      $170                 16?12               	;0
322 150  FETCH_STATIC_PROP_IS/176  $172=     252:'rRequest'       253:'XUI'           	;0
323 150  ISSET_ISEMPTY_DIM_OBJ/115 #173=     $172                 255:'action'        	;16777216
324 150  BOOL_NOT/13               #174=     #173                 ?0                  	;0
325 150  JMPZ_EX/46                #174=     #174                 ?330                	;0	>>330
326 150  FETCH_STATIC_PROP_R/173   $175=     256:'rRequest'       257:'XUI'           	;0
327 150  FETCH_DIM_R/81            $176=     $175                 259:'action'        	;0
328 150  IS_EQUAL/17               #177=     $176                 260:'auth'          	;0
329 150  BOOL/52                   #174=     #177                 ?0                  	;0
330 150  BOOL_NOT/13               #178=     #174                 ?0                  	;0	<<325
331 150  JMPZ/43                   ?0        #178                 ?333                	;0	>>333
332 151  GOTO/253                  ?0        ?471                 ?261                	;0
333 153  FETCH_STATIC_PROP_IS/176  $179=     262:'rRequest'       263:'XUI'           	;0	<<331
334 153  ISSET_ISEMPTY_DIM_OBJ/115 #180=     $179                 265:'mac'           	;33554432
335 153  JMPZ/43                   ?0        #180                 ?343                	;0	>>343
336 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'htmlentities'  	;1
337 153  FETCH_STATIC_PROP_FUNC_ARG/177 $181=     268:'rRequest'       269:'XUI'           	;1
338 153  FETCH_DIM_FUNC_ARG/93     $182=     $181                 271:'mac'           	;1
339 153  SEND_VAR_EX/66            ?80       $182                 ?1                  	;0
340 153  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
341 153  QM_ASSIGN/22              #184=     $183                 ?0                  	;0
342 153  JMP/42                    ?0        ?344                 ?0                  	;0	>>344
343 153  QM_ASSIGN/22              #184=     272:''               ?0                  	;0	<<335
344 153  ASSIGN/38                 ?161      16?11                #184                	;0	<<342
345 154  GOTO/253                  ?0        ?505                 ?273                	;0
346 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   274:'generateError' 	;1
347 156  SEND_VAL_EX/116           ?80       276:'E2_TOKEN_DOESNT_MATCH' ?1                  	;0
348 156  DO_FCALL_BY_NAME/131      ?162      ?0                   ?0                  	;0
349 158  ASSIGN/38                 ?163      16?2                 277:false           	;0
350 159  INIT_METHOD_CALL/112      ?0        16?12                278:'get_row'       	;0
351 159  DO_FCALL/60               $188=     ?0                   ?0                  	;0
352 159  ASSIGN/38                 ?165      16?15                $188                	;0
353 160  INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'time'          	;0
354 160  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
355 160  FETCH_DIM_R/81            $191=     16?15                282:'last_updated'  	;0
356 160  SUB/2                     #192=     $190                 $191                	;0
357 160  FETCH_DIM_R/81            $193=     16?15                283:'watchdog_timeout'	;0
358 160  ADD/1                     #194=     $193                 284:20              	;0
359 160  IS_SMALLER/19             #195=     #194                 #192                	;0
360 160  BOOL_NOT/13               #196=     #195                 ?0                  	;0
361 160  JMPZ/43                   ?0        #196                 ?363                	;0	>>363
362 161  GOTO/253                  ?0        ?89                  ?285                	;0
363 163  GOTO/253                  ?0        ?86                  ?286                	;0	<<361
364 165  FETCH_IS/89               $197=     287:'_FILES'         ?0                  	;0
365 165  FETCH_DIM_IS/90           $198=     $197                 288:'f'             	;0
366 165  ISSET_ISEMPTY_DIM_OBJ/115 #199=     $198                 289:'name'          	;16777216
367 165  JMPZ/43                   ?0        #199                 ?369                	;0	>>369
368 166  GOTO/253                  ?0        ?1                   ?290                	;0
369 168  FETCH_R/80                $200=     291:'_FILES'         ?0                  	;0	<<367
370 168  FETCH_DIM_R/81            $201=     $200                 292:'f'             	;0
371 168  FETCH_DIM_R/81            $202=     $201                 293:'error'         	;0
372 168  IS_EQUAL/17               #203=     $202                 294:0               	;0
373 168  BOOL_NOT/13               #204=     #203                 ?0                  	;0
374 168  JMPZ/43                   ?0        #204                 ?376                	;0	>>376
375 169  GOTO/253                  ?0        ?1                   ?295                	;0
376 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'strtolower'    	;1	<<374
377 171  FETCH_FUNC_ARG/92         $205=     298:'_FILES'         ?0                  	;1
378 171  FETCH_DIM_FUNC_ARG/93     $206=     $205                 299:'f'             	;1
379 171  FETCH_DIM_FUNC_ARG/93     $207=     $206                 300:'tmp_name'      	;1
380 171  SEND_VAR_EX/66            ?80       $207                 ?1                  	;0
381 171  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
382 171  ASSIGN/38                 ?185      16?21                $208                	;0
383 172  FETCH_STATIC_PROP_R/173   $210=     301:'rRequest'       302:'XUI'           	;0
384 172  FETCH_DIM_R/81            $211=     $210                 304:'t'             	;0
385 172  ASSIGN/38                 ?188      16?22                $211                	;0
386 174  CASE/48                   #213=     16?22                305:'screen'        	;0	>>388
387 174  JMPNZ/44                  ?0        #213                 ?389                	;0	>>389
388 174  JMP/42                    ?0        ?423                 ?0                  	;0	>>423	<<386
389 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   306:'getimagesize'  	;1	<<387
390 175  FETCH_FUNC_ARG/92         $214=     308:'_FILES'         ?0                  	;1
391 175  FETCH_DIM_FUNC_ARG/93     $215=     $214                 309:'f'             	;1
392 175  FETCH_DIM_FUNC_ARG/93     $216=     $215                 310:'tmp_name'      	;1
393 175  SEND_VAR_EX/66            ?80       $216                 ?1                  	;0
394 175  DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
395 175  ASSIGN/38                 ?194      16?23                $217                	;0
396 176  JMPZ_EX/46                #219=     16?23                ?400                	;0	>>400
397 176  FETCH_DIM_R/81            $220=     16?23                311:2               	;0
398 176  IS_EQUAL/17               #221=     $220                 312:'IMAGETYPE_JPEG'	;0
399 176  BOOL/52                   #219=     #221                 ?0                  	;0
400 176  BOOL_NOT/13               #222=     #219                 ?0                  	;0	<<396
401 176  JMPZ/43                   ?0        #222                 ?403                	;0	>>403
402 177  GOTO/253                  ?0        ?422                 ?313                	;0
403 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   314:'move_uploaded_file'	;2	<<401
404 179  FETCH_FUNC_ARG/92         $223=     316:'_FILES'         ?0                  	;1
405 179  FETCH_DIM_FUNC_ARG/93     $224=     $223                 317:'f'             	;1
406 179  FETCH_DIM_FUNC_ARG/93     $225=     $224                 318:'tmp_name'      	;1
407 179  SEND_VAR_EX/66            ?80       $225                 ?1                  	;0
408 179  FETCH_CONSTANT/99         #226=     ?0                   319:'E2_IMAGES_PATH'	;16
409 179  FETCH_DIM_R/81            $227=     16?15                322:'device_id'     	;0
410 179  CONCAT/8                  #228=     #226                 $227                	;0
411 179  CONCAT/8                  #229=     #228                 323:'_screen_'      	;0
412 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'time'          	;0
413 179  DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
414 179  CONCAT/8                  #231=     #229                 $230                	;0
415 179  CONCAT/8                  #232=     #231                 326:'_'             	;0
416 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'uniqid'        	;0
417 179  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
418 179  CONCAT/8                  #234=     #232                 $233                	;0
419 179  CONCAT/8                  #235=     #234                 329:'.jpg'          	;0
420 179  SEND_VAL_EX/116           ?96       #235                 ?2                  	;0
421 179  DO_FCALL_BY_NAME/131      ?212      ?0                   ?0                  	;0
422 181  GOTO/253                  ?0        ?1                   ?330                	;0
423 183  GOTO/253                  ?0        ?1                   ?331                	;0	<<388
424 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'generateError' 	;1
425 185  SEND_VAL_EX/116           ?80       334:'E2_DISABLED'    ?1                  	;0
426 185  DO_FCALL_BY_NAME/131      ?213      ?0                   ?0                  	;0
427 187  FETCH_R/80                $238=     335:'_SERVER'        ?0                  	;0
428 187  FETCH_DIM_R/81            $239=     $238                 336:'REMOTE_ADDR'   	;0
429 187  ASSIGN/38                 ?216      16?13                $239                	;0
430 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   337:'trim'          	;1
431 188  FETCH_FUNC_ARG/92         $241=     339:'_SERVER'        ?0                  	;1
432 188  FETCH_DIM_FUNC_ARG/93     $242=     $241                 340:'HTTP_USER_AGENT'	;1
433 188  SEND_VAR_EX/66            ?80       $242                 ?1                  	;0
434 188  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
435 188  ASSIGN/38                 ?220      16?14                $243                	;0
436 189  FETCH_STATIC_PROP_IS/176  $245=     341:'rRequest'       342:'XUI'           	;0
437 189  ISSET_ISEMPTY_DIM_OBJ/115 #246=     $245                 344:'action'        	;16777216
438 189  BOOL_NOT/13               #247=     #246                 ?0                  	;0
439 189  JMPZ_EX/46                #247=     #247                 ?444                	;0	>>444
440 189  FETCH_STATIC_PROP_R/173   $248=     345:'rRequest'       346:'XUI'           	;0
441 189  FETCH_DIM_R/81            $249=     $248                 348:'action'        	;0
442 189  IS_EQUAL/17               #250=     $249                 349:'gen_mac'       	;0
443 189  BOOL/52                   #247=     #250                 ?0                  	;0
444 189  JMPZ_EX/46                #247=     #247                 ?449                	;0	>>449	<<439
445 189  FETCH_STATIC_PROP_IS/176  $251=     350:'rRequest'       351:'XUI'           	;0
446 189  ISSET_ISEMPTY_DIM_OBJ/115 #252=     $251                 353:'pversion'      	;16777216
447 189  BOOL_NOT/13               #253=     #252                 ?0                  	;0
448 189  BOOL/52                   #247=     #253                 ?0                  	;0
449 189  BOOL_NOT/13               #254=     #247                 ?0                  	;0	<<444
450 189  JMPZ/43                   ?0        #254                 ?452                	;0	>>452
451 190  GOTO/253                  ?0        ?316                 ?354                	;0
452 192  GOTO/253                  ?0        ?32                  ?355                	;0	<<450
453 195  FETCH_DIM_R/81            $256=     16?1                 357:'type'          	;0
454 195  CAST/21                   #257=     $256                 ?0                  	;4
455 195  ASSIGN_DIM/147            ?231      16?0                 356:'block_ftp'     	;0
456 195  OP_DATA/137               ?0        #257                 ?0                  	;0
457 197  GOTO/253                  ?0        ?14                  ?358                	;0
458 199  GOTO/253                  ?0        ?10                  ?359                	;0
459 201  GOTO/253                  ?0        ?464                 ?360                	;0
460 203  FETCH_DIM_R/81            $259=     16?1                 362:'type'          	;0
461 203  CAST/21                   #260=     $259                 ?0                  	;4
462 203  ASSIGN_DIM/147            ?234      16?0                 361:'block_all'     	;0
463 203  OP_DATA/137               ?0        #260                 ?0                  	;0
464 205  GOTO/253                  ?0        ?457                 ?363                	;0
465 206  GOTO/253                  ?0        ?453                 ?364                	;0
466 208  INIT_FCALL_BY_NAME/59     ?0        ?0                   365:'json_encode'   	;1
467 208  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
468 208  DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
469 208  ECHO/40                   ?0        $261                 ?0                  	;0
470 209  EXIT/79                   ?0        ?0                   ?0                  	;0
471 212  FETCH_STATIC_PROP_IS/176  $262=     367:'rRequest'       368:'XUI'           	;0
472 212  ISSET_ISEMPTY_DIM_OBJ/115 #263=     $262                 370:'token'         	;16777216
473 212  BOOL_NOT/13               #264=     #263                 ?0                  	;0
474 212  JMPZ/43                   ?0        #264                 ?476                	;0	>>476
475 213  GOTO/253                  ?0        ?172                 ?371                	;0
476 215  GOTO/253                  ?0        ?169                 ?372                	;0	<<474
477 218  GOTO/253                  ?0        ?481                 ?373                	;0
478 220  FETCH_DIM_R/81            $266=     16?1                 375:'command'       	;0
479 220  ASSIGN_DIM/147            ?241      16?0                 374:'update'        	;0
480 220  OP_DATA/137               ?0        $266                 ?0                  	;0
481 222  GOTO/253                  ?0        ?500                 ?376                	;0
482 224  FETCH_DIM_R/81            $267=     16?1                 377:'key'           	;0
483 224  IS_EQUAL/17               #268=     $267                 378:'block_ftp'     	;0
484 224  JMPZ/43                   ?0        #268                 ?486                	;0	>>486
485 225  GOTO/253                  ?0        ?453                 ?379                	;0
486 227  FETCH_DIM_R/81            $269=     16?1                 380:'key'           	;0	<<484
487 227  IS_EQUAL/17               #270=     $269                 381:'block_all'     	;0
488 227  JMPZ/43                   ?0        #270                 ?490                	;0	>>490
489 228  GOTO/253                  ?0        ?460                 ?382                	;0
490 230  FETCH_DIM_R/81            $271=     16?1                 383:'key'           	;0	<<488
491 230  IS_EQUAL/17               #272=     $271                 384:'block_plugin'  	;0
492 230  BOOL_NOT/13               #273=     #272                 ?0                  	;0
493 230  JMPZ/43                   ?0        #273                 ?495                	;0	>>495
494 231  GOTO/253                  ?0        ?499                 ?385                	;0
495 233  FETCH_DIM_R/81            $275=     16?1                 387:'type'          	;0	<<493
496 233  CAST/21                   #276=     $275                 ?0                  	;4
497 233  ASSIGN_DIM/147            ?250      16?0                 386:'block_plugin'  	;0
498 233  OP_DATA/137               ?0        #276                 ?0                  	;0
499 235  GOTO/253                  ?0        ?459                 ?388                	;0
500 237  GOTO/253                  ?0        ?503                 ?389                	;0
501 239  ASSIGN_DIM/147            ?253      16?0                 390:'reboot'        	;0
502 239  OP_DATA/137               ?0        391:1                ?0                  	;0
503 241  GOTO/253                  ?0        ?230                 ?392                	;0
504 242  GOTO/253                  ?0        ?228                 ?393                	;0
505 244  FETCH_STATIC_PROP_IS/176  $278=     394:'rRequest'       395:'XUI'           	;0
506 244  ISSET_ISEMPTY_DIM_OBJ/115 #279=     $278                 397:'mmac'          	;33554432
507 244  JMPZ/43                   ?0        #279                 ?515                	;0	>>515
508 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   398:'htmlentities'  	;1
509 244  FETCH_STATIC_PROP_FUNC_ARG/177 $280=     400:'rRequest'       401:'XUI'           	;1
510 244  FETCH_DIM_FUNC_ARG/93     $281=     $280                 403:'mmac'          	;1
511 244  SEND_VAR_EX/66            ?80       $281                 ?1                  	;0
512 244  DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
513 244  QM_ASSIGN/22              #283=     $282                 ?0                  	;0
514 244  JMP/42                    ?0        ?516                 ?0                  	;0	>>516
515 244  QM_ASSIGN/22              #283=     404:''               ?0                  	;0	<<507
516 244  ASSIGN/38                 ?260      16?16                #283                	;0	<<514
517 245  FETCH_STATIC_PROP_IS/176  $285=     405:'rRequest'       406:'XUI'           	;0
518 245  ISSET_ISEMPTY_DIM_OBJ/115 #286=     $285                 408:'ip'            	;33554432
519 245  JMPZ/43                   ?0        #286                 ?527                	;0	>>527
520 245  INIT_FCALL_BY_NAME/59     ?0        ?0                   409:'htmlentities'  	;1
521 245  FETCH_STATIC_PROP_FUNC_ARG/177 $287=     411:'rRequest'       412:'XUI'           	;1
522 245  FETCH_DIM_FUNC_ARG/93     $288=     $287                 414:'ip'            	;1
523 245  SEND_VAR_EX/66            ?80       $288                 ?1                  	;0
524 245  DO_FCALL_BY_NAME/131      $289=     ?0                   ?0                  	;0
525 245  QM_ASSIGN/22              #290=     $289                 ?0                  	;0
526 245  JMP/42                    ?0        ?528                 ?0                  	;0	>>528
527 245  QM_ASSIGN/22              #290=     415:''               ?0                  	;0	<<519
528 245  ASSIGN/38                 ?267      16?17                #290                	;0	<<526
529 246  FETCH_STATIC_PROP_IS/176  $292=     416:'rRequest'       417:'XUI'           	;0
530 246  ISSET_ISEMPTY_DIM_OBJ/115 #293=     $292                 419:'version'       	;33554432
531 246  JMPZ/43                   ?0        #293                 ?539                	;0	>>539
532 246  INIT_FCALL_BY_NAME/59     ?0        ?0                   420:'htmlentities'  	;1
533 246  FETCH_STATIC_PROP_FUNC_ARG/177 $294=     422:'rRequest'       423:'XUI'           	;1
534 246  FETCH_DIM_FUNC_ARG/93     $295=     $294                 425:'version'       	;1
535 246  SEND_VAR_EX/66            ?80       $295                 ?1                  	;0
536 246  DO_FCALL_BY_NAME/131      $296=     ?0                   ?0                  	;0
537 246  QM_ASSIGN/22              #297=     $296                 ?0                  	;0
538 246  JMP/42                    ?0        ?540                 ?0                  	;0	>>540
539 246  QM_ASSIGN/22              #297=     426:''               ?0                  	;0	<<531
540 246  ASSIGN/38                 ?274      16?18                #297                	;0	<<538
541 247  FETCH_STATIC_PROP_IS/176  $299=     427:'rRequest'       428:'XUI'           	;0
542 247  ISSET_ISEMPTY_DIM_OBJ/115 #300=     $299                 430:'type'          	;33554432
543 247  JMPZ/43                   ?0        #300                 ?551                	;0	>>551
544 247  INIT_FCALL_BY_NAME/59     ?0        ?0                   431:'htmlentities'  	;1
545 247  FETCH_STATIC_PROP_FUNC_ARG/177 $301=     433:'rRequest'       434:'XUI'           	;1
546 247  FETCH_DIM_FUNC_ARG/93     $302=     $301                 436:'type'          	;1
547 247  SEND_VAR_EX/66            ?80       $302                 ?1                  	;0
548 247  DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
549 247  QM_ASSIGN/22              #304=     $303                 ?0                  	;0
550 247  JMP/42                    ?0        ?552                 ?0                  	;0	>>552
551 247  QM_ASSIGN/22              #304=     437:''               ?0                  	;0	<<543
552 247  ASSIGN/38                 ?281      16?19                #304                	;0	<<550
553 248  FETCH_STATIC_PROP_IS/176  $306=     438:'rRequest'       439:'XUI'           	;0
554 248  ISSET_ISEMPTY_DIM_OBJ/115 #307=     $306                 441:'pversion'      	;33554432
555 248  JMPZ/43                   ?0        #307                 ?563                	;0	>>563
556 248  INIT_FCALL_BY_NAME/59     ?0        ?0                   442:'htmlentities'  	;1
557 248  FETCH_STATIC_PROP_FUNC_ARG/177 $308=     444:'rRequest'       445:'XUI'           	;1
558 248  FETCH_DIM_FUNC_ARG/93     $309=     $308                 447:'pversion'      	;1
559 248  SEND_VAR_EX/66            ?80       $309                 ?1                  	;0
560 248  DO_FCALL_BY_NAME/131      $310=     ?0                   ?0                  	;0
561 248  QM_ASSIGN/22              #311=     $310                 ?0                  	;0
562 248  JMP/42                    ?0        ?564                 ?0                  	;0	>>564
563 248  QM_ASSIGN/22              #311=     448:''               ?0                  	;0	<<555
564 248  ASSIGN/38                 ?288      16?20                #311                	;0	<<562
565 249  GOTO/253                  ?0        ?102                 ?449                	;0
566 251  INIT_METHOD_CALL/112      ?0        16?12                450:'num_rows'      	;0
567 251  DO_FCALL/60               $313=     ?0                   ?0                  	;0
568 251  IS_SMALLER/19             #314=     452:0                $313                	;0
569 251  BOOL_NOT/13               #315=     #314                 ?0                  	;0
570 251  JMPZ/43                   ?0        #315                 ?572                	;0	>>572
571 252  GOTO/253                  ?0        ?165                 ?453                	;0
572 254  INIT_METHOD_CALL/112      ?0        16?12                454:'get_row'       	;0	<<570
573 254  DO_FCALL/60               $316=     ?0                   ?0                  	;0
574 254  ASSIGN/38                 ?293      16?1                 $316                	;0
575 255  FETCH_DIM_R/81            $318=     16?1                 456:'key'           	;0
576 255  IS_EQUAL/17               #319=     $318                 457:'message'       	;0
577 255  JMPZ/43                   ?0        #319                 ?579                	;0	>>579
578 256  GOTO/253                  ?0        ?3                   ?458                	;0
579 258  FETCH_DIM_R/81            $320=     16?1                 459:'key'           	;0	<<577
580 258  IS_EQUAL/17               #321=     $320                 460:'ssh'           	;0
581 258  JMPZ/43                   ?0        #321                 ?583                	;0	>>583
582 259  GOTO/253                  ?0        ?312                 ?461                	;0
583 261  FETCH_DIM_R/81            $322=     16?1                 462:'key'           	;0	<<581
584 261  IS_EQUAL/17               #323=     $322                 463:'screen'        	;0
585 261  JMPZ/43                   ?0        #323                 ?587                	;0	>>587
586 262  GOTO/253                  ?0        ?231                 ?464                	;0
587 264  GOTO/253                  ?0        ?207                 ?465                	;0	<<585
588 266  INIT_STATIC_METHOD_CALL/113 ?0        466:'XUI'            468:'A1Fef6439C28608e'	;2
589 266  SEND_VAL_EX/116           ?80       470:NULL             ?1                  	;0
590 266  INIT_FCALL_BY_NAME/59     ?0        ?0                   471:'strtoupper'    	;1
591 266  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
592 266  DO_FCALL_BY_NAME/131      $324=     ?0                   ?0                  	;0
593 266  SEND_VAR_NO_REF_EX/50     ?96       $324                 ?2                  	;0
594 266  DO_FCALL/60               ?301      ?0                   ?0                  	;0
595 267  INIT_FCALL_BY_NAME/59     ?0        ?0                   473:'generateError' 	;1
596 267  SEND_VAL_EX/116           ?80       475:'INVALID_CREDENTIALS' ?1                  	;0
597 267  DO_FCALL_BY_NAME/131      ?302      ?0                   ?0                  	;0
598 268  GOTO/253                  ?0        ?471                 ?476                	;0
599 270  ASSIGN/38                 ?303      16?2                 477:false           	;0
600 271  GOTO/253                  ?0        ?281                 ?478                	;0
601 273  NOP/0                     ?0        ?0                   ?0                  	;0
602 287  NOP/0                     ?0        479:1                ?0                  	;4294967295
*/

?>