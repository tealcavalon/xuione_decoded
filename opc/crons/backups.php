<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'ini_set'         	;2	<<0
2   5    SEND_VAL_EX/116           ?80       3:'display_errors'   ?1                  	;0
3   5    SEND_VAL_EX/116           ?96       4:1                  ?2                  	;0
4   5    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
5   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'ini_set'         	;2
6   6    SEND_VAL_EX/116           ?80       7:'display_startup_errors' ?1                  	;0
7   6    SEND_VAL_EX/116           ?96       8:1                  ?2                  	;0
8   6    DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
9   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'error_reporting' 	;1
10  7    SEND_VAL_EX/116           ?80       11:32757             ?1                  	;0
11  7    DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
12  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'posix_getpwuid' 	;1
13  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'posix_geteuid'  	;0
14  8    DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
15  8    SEND_VAR_NO_REF_EX/50     ?80       $19                  ?1                  	;0
16  8    DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
17  8    FETCH_DIM_R/81            $21=      $20                  16:'name'           	;0
18  8    IS_NOT_EQUAL/18           #22=      $21                  17:'xui'            	;0
19  8    BOOL_NOT/13               #23=      #22                  ?0                  	;0
20  8    JMPZ/43                   ?0        #23                  ?22                 	;0	>>22
21  9    GOTO/253                  ?0        ?304                 ?18                 	;0
22  11   EXIT/79                   ?0        19:'Please run as XUI!
' ?0                  	;0	<<20
23  12   GOTO/253                  ?0        ?304                 ?20                 	;0
24  14   ASSIGN/38                 ?8        16?0                 21:true             	;0
25  17   FETCH_STATIC_PROP_R/173   $25=      22:'rSettings'       23:'XUI'            	;0
26  17   FETCH_DIM_R/81            $26=      $25                  25:'automatic_backups'	;0
27  17   ASSIGN/38                 ?11       16?1                 $26                 	;0
28  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'intval'         	;1
29  18   FETCH_STATIC_PROP_FUNC_ARG/177 $28=      28:'rSettings'       29:'XUI'            	;1
30  18   FETCH_DIM_FUNC_ARG/93     $29=      $28                  31:'last_backup'    	;1
31  18   SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
32  18   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
33  18   ASSIGN/38                 ?15       16?2                 $30                 	;0
34  19   GOTO/253                  ?0        ?248                 ?32                 	;0
35  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'json_decode'    	;2
36  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'json_encode'    	;2
37  21   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
38  21   FETCH_CONSTANT/99         #32=      ?0                   37:'JSON_UNESCAPED_UNICODE'	;16
39  21   SEND_VAL_EX/116           ?96       #32                  ?2                  	;0
40  21   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
41  21   SEND_VAR_NO_REF_EX/50     ?80       $33                  ?1                  	;0
42  21   SEND_VAL_EX/116           ?96       40:true              ?2                  	;0
43  21   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
44  21   ASSIGN/38                 ?19       16?3                 $34                 	;0
45  22   ISSET_ISEMPTY_DIM_OBJ/115 #36=      16?3                 41:'size'           	;33554432
46  22   BOOL_NOT/13               #37=      #36                  ?0                  	;0
47  22   JMPNZ_EX/47               #37=      #37                  ?57                 	;0	>>57
48  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'intval'         	;1
49  22   FETCH_DIM_FUNC_ARG/93     $38=      16?3                 44:'size'           	;1
50  22   SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
51  22   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
52  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'filesize'       	;1
53  22   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
54  22   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
55  22   IS_NOT_EQUAL/18           #41=      $39                  $40                 	;0
56  22   BOOL/52                   #37=      #41                  ?0                  	;0
57  22   BOOL_NOT/13               #42=      #37                  ?0                  	;0	<<47
58  22   JMPZ/43                   ?0        #42                  ?60                 	;0	>>60
59  23   GOTO/253                  ?0        ?66                  ?47                 	;0
60  25   ASSIGN/38                 ?27       16?5                 48:'Failed to upload'	;0	<<58
61  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'file_put_contents'	;2
62  26   CONCAT/8                  #44=      16?4                 51:'.error'         	;0
63  26   SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
64  26   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
65  26   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
66  28   GOTO/253                  ?0        ?154                 ?52                 	;0
67  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'d436A797a6BF499F'	;0
68  31   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
69  31   ASSIGN/38                 ?31       16?1                 $46                 	;0
70  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'count'          	;1
71  32   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
72  32   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
73  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'intval'         	;1
74  32   FETCH_STATIC_PROP_FUNC_ARG/177 $49=      59:'rSettings'       60:'XUI'            	;1
75  32   FETCH_DIM_FUNC_ARG/93     $50=      $49                  62:'backups_to_keep'	;1
76  32   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
77  32   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
78  32   IS_SMALLER/19             #52=      $51                  $48                 	;0
79  32   JMPZ_EX/46                #52=      #52                  ?87                 	;0	>>87
80  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'intval'         	;1
81  32   FETCH_STATIC_PROP_FUNC_ARG/177 $53=      65:'rSettings'       66:'XUI'            	;1
82  32   FETCH_DIM_FUNC_ARG/93     $54=      $53                  68:'backups_to_keep'	;1
83  32   SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
84  32   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
85  32   IS_SMALLER/19             #56=      69:0                 $55                 	;0
86  32   BOOL/52                   #52=      #56                  ?0                  	;0
87  32   BOOL_NOT/13               #57=      #52                  ?0                  	;0	<<79
88  32   JMPZ/43                   ?0        #57                  ?90                 	;0	>>90
89  33   GOTO/253                  ?0        ?159                 ?70                 	;0
90  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'array_slice'    	;3	<<88
91  35   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
92  35   SEND_VAL_EX/116           ?96       73:0                 ?2                  	;0
93  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'count'          	;1
94  35   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
95  35   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
96  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'intval'         	;1
97  35   FETCH_STATIC_PROP_FUNC_ARG/177 $59=      78:'rSettings'       79:'XUI'            	;1
98  35   FETCH_DIM_FUNC_ARG/93     $60=      $59                  81:'backups_to_keep'	;1
99  35   SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
100 35   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
101 35   SUB/2                     #62=      $58                  $61                 	;0
102 35   SEND_VAL_EX/116           ?112      #62                  ?3                  	;0
103 35   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
104 35   ASSIGN/38                 ?48       16?6                 $63                 	;0
105 36   FE_RESET_R/77             $65=      16?6                 ?126                	;0
106 36   FE_FETCH_R/78             ?0        $65                  16?7                	;126	>>126	<<125
107 37   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'file_exists'    	;1
108 37   FETCH_CONSTANT/99         #66=      ?0                   84:'XUI_HOME'       	;16
109 37   CONCAT/8                  #67=      #66                  87:'backups/'       	;0
110 37   FETCH_DIM_R/81            $68=      16?7                 88:'filename'       	;0
111 37   CONCAT/8                  #69=      #67                  $68                 	;0
112 37   SEND_VAL_EX/116           ?80       #69                  ?1                  	;0
113 37   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
114 37   BOOL_NOT/13               #71=      $70                  ?0                  	;0
115 37   JMPZ/43                   ?0        #71                  ?118                	;0	>>118
116 38   NOP/0                     ?0        ?0                   ?0                  	;1
117 38   GOTO/253                  ?0        ?125                 ?89                 	;0
118 40   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'unlink'         	;1	<<115
119 40   FETCH_CONSTANT/99         #72=      ?0                   92:'XUI_HOME'       	;16
120 40   CONCAT/8                  #73=      #72                  95:'backups/'       	;0
121 40   FETCH_DIM_R/81            $74=      16?7                 96:'filename'       	;0
122 40   CONCAT/8                  #75=      #73                  $74                 	;0
123 40   SEND_VAL_EX/116           ?80       #75                  ?1                  	;0
124 40   DO_FCALL_BY_NAME/131      ?60       ?0                   ?0                  	;0
125 42   JMP/42                    ?0        ?106                 ?0                  	;0	>>106
126 42   FE_FREE/127               ?0        $65                  ?0                  	;0	<<105
127 44   GOTO/253                  ?0        ?159                 ?97                 	;0
128 46   INIT_METHOD_CALL/112      ?0        16?8                 98:'close_mysql'    	;0
129 46   DO_FCALL/60               ?61       ?0                   ?0                  	;0
130 47   FETCH_CONSTANT/99         #78=      ?0                   100:'XUI_HOME'      	;16
131 47   CONCAT/8                  #79=      #78                  103:'backups/backup_'	;0
132 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'date'          	;1
133 47   SEND_VAL_EX/116           ?80       106:'Y-m-d_H:i:s'    ?1                  	;0
134 47   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
135 47   CONCAT/8                  #81=      #79                  $80                 	;0
136 47   CONCAT/8                  #82=      #81                  107:'.sql'          	;0
137 47   ASSIGN/38                 ?67       16?4                 #82                 	;0
138 48   INIT_STATIC_METHOD_CALL/113 ?0        108:'Xui\\Functions' 110:'backup'        	;3
139 48   SEND_VAL_EX/116           ?80       112:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
140 48   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
141 48   SEND_VAL_EX/116           ?112      113:true             ?3                  	;0
142 48   DO_FCALL/60               $84=      ?0                   ?0                  	;0
143 48   ASSIGN/38                 ?69       16?9                 $84                 	;0
144 49   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'filesize'      	;1
145 49   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
146 49   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
147 49   IS_SMALLER/19             #87=      116:0                $86                 	;0
148 49   JMPZ/43                   ?0        #87                  ?150                	;0	>>150
149 50   GOTO/253                  ?0        ?315                 ?117                	;0
150 52   INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'unlink'        	;1	<<148
151 52   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
152 52   DO_FCALL_BY_NAME/131      ?72       ?0                   ?0                  	;0
153 53   GOTO/253                  ?0        ?314                 ?120                	;0
154 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'unlink'        	;1
155 56   CONCAT/8                  #89=      16?4                 123:'.uploading'    	;0
156 56   SEND_VAL_EX/116           ?80       #89                  ?1                  	;0
157 56   DO_FCALL_BY_NAME/131      ?74       ?0                   ?0                  	;0
158 60   GOTO/253                  ?0        ?67                  ?124                	;0
159 64   FETCH_STATIC_PROP_R/173   $91=      125:'rSettings'      126:'XUI'           	;0
160 64   FETCH_DIM_R/81            $92=      $91                  128:'dropbox_remote'	;0
161 64   BOOL_NOT/13               #93=      $92                  ?0                  	;0
162 64   JMPZ/43                   ?0        #93                  ?164                	;0	>>164
163 65   GOTO/253                  ?0        ?383                 ?129                	;0
164 67   INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'f8af02a007c4B90c'	;0	<<162
165 67   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
166 67   ASSIGN/38                 ?79       16?10                $94                 	;0
167 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'count'         	;1
168 68   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
169 68   DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
170 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'intval'        	;1
171 68   FETCH_STATIC_PROP_FUNC_ARG/177 $97=      136:'rSettings'      137:'XUI'           	;1
172 68   FETCH_DIM_FUNC_ARG/93     $98=      $97                  139:'dropbox_keep'  	;1
173 68   SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
174 68   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
175 68   IS_SMALLER/19             #100=     $99                  $96                 	;0
176 68   JMPZ_EX/46                #100=     #100                 ?184                	;0	>>184
177 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'intval'        	;1
178 68   FETCH_STATIC_PROP_FUNC_ARG/177 $101=     142:'rSettings'      143:'XUI'           	;1
179 68   FETCH_DIM_FUNC_ARG/93     $102=     $101                 145:'dropbox_keep'  	;1
180 68   SEND_VAR_EX/66            ?80       $102                 ?1                  	;0
181 68   DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
182 68   IS_SMALLER/19             #104=     146:0                $103                	;0
183 68   BOOL/52                   #100=     #104                 ?0                  	;0
184 68   BOOL_NOT/13               #105=     #100                 ?0                  	;0	<<176
185 68   JMPZ/43                   ?0        #105                 ?187                	;0	>>187
186 69   GOTO/253                  ?0        ?383                 ?147                	;0
187 71   GOTO/253                  ?0        ?358                 ?148                	;0	<<185
188 73   GOTO/253                  ?0        ?190                 ?149                	;0
189 75   EXIT/79                   ?0        ?0                   ?0                  	;0
190 78   GOTO/253                  ?0        ?191                 ?150                	;0
191 80   ISSET_ISEMPTY_CV/197      #106=     16?1                 ?0                  	;33554432
192 80   JMPZ_EX/46                #106=     #106                 ?195                	;0	>>195
193 80   IS_NOT_EQUAL/18           #107=     16?1                 151:'off'           	;0
194 80   BOOL/52                   #106=     #107                 ?0                  	;0
195 80   JMPNZ_EX/47               #106=     #106                 ?197                	;0	>>197	<<192
196 80   BOOL/52                   #106=     16?0                 ?0                  	;0
197 80   BOOL_NOT/13               #108=     #106                 ?0                  	;0	<<195
198 80   JMPZ/43                   ?0        #108                 ?200                	;0	>>200
199 81   GOTO/253                  ?0        ?67                  ?152                	;0
200 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'time'          	;0	<<198
201 83   DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
202 83   FETCH_DIM_R/81            $110=     16?11                16?1                	;0
203 83   ADD/1                     #111=     16?2                 $110                	;0
204 83   IS_SMALLER_OR_EQUAL/20    #112=     #111                 $109                	;0
205 83   JMPNZ_EX/47               #112=     #112                 ?207                	;0	>>207
206 83   BOOL/52                   #112=     16?0                 ?0                  	;0
207 83   BOOL_NOT/13               #113=     #112                 ?0                  	;0	<<205
208 83   JMPZ/43                   ?0        #113                 ?210                	;0	>>210
209 84   GOTO/253                  ?0        ?158                 ?155                	;0
210 86   JMPZ/43                   ?0        16?0                 ?212                	;0	>>212	<<208
211 87   GOTO/253                  ?0        ?218                 ?156                	;0
212 89   INIT_METHOD_CALL/112      ?0        16?8                 157:'query'         	;2	<<210
213 89   SEND_VAL_EX/116           ?80       159:'UPDATE `settings` SET `last_backup` = ?;' ?1                  	;0
214 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'time'          	;0
215 89   DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
216 89   SEND_VAR_NO_REF_EX/50     ?96       $114                 ?2                  	;0
217 89   DO_FCALL/60               ?99       ?0                   ?0                  	;0
218 91   GOTO/253                  ?0        ?128                 ?162                	;0
219 93   FETCH_CONSTANT/99         #116=     ?0                   163:'CRONS_TMP_PATH'	;16
220 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'md5'           	;1
221 93   INIT_STATIC_METHOD_CALL/113 ?0        168:'XUI'            170:'a336b0Dad3EAF634'	;0
222 93   DO_FCALL/60               $117=     ?0                   ?0                  	;0
223 93   CONCAT/8                  #118=     $117                 172:'crons\\backups.php'	;0
224 93   SEND_VAL_EX/116           ?80       #118                 ?1                  	;0
225 93   DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
226 93   CONCAT/8                  #120=     #116                 $119                	;0
227 93   ASSIGN/38                 ?105      16?12                #120                	;0
228 94   INIT_STATIC_METHOD_CALL/113 ?0        173:'XUI'            175:'a3cf732C257bd804'	;1
229 94   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
230 94   DO_FCALL/60               ?106      ?0                   ?0                  	;0
231 95   ASSIGN/38                 ?107      16?0                 177:false           	;0
232 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'count'         	;1
233 96   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
234 96   DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
235 96   IS_SMALLER/19             #125=     180:1                $124                	;0
236 96   BOOL_NOT/13               #126=     #125                 ?0                  	;0
237 96   JMPZ/43                   ?0        #126                 ?239                	;0	>>239
238 97   GOTO/253                  ?0        ?25                  ?181                	;0
239 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'intval'        	;1	<<237
240 99   FETCH_DIM_FUNC_ARG/93     $127=     16?13                184:1               	;1
241 99   SEND_VAR_EX/66            ?80       $127                 ?1                  	;0
242 99   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
243 99   IS_EQUAL/17               #129=     $128                 185:1               	;0
244 99   BOOL_NOT/13               #130=     #129                 ?0                  	;0
245 99   JMPZ/43                   ?0        #130                 ?247                	;0	>>247
246 100  GOTO/253                  ?0        ?25                  ?186                	;0
247 102  GOTO/253                  ?0        ?24                  ?187                	;0	<<245
248 104  ASSIGN/38                 ?115      16?11                188:array (
  'hourly' => 3600,
  'daily' => 86400,
  'weekly' => 604800,
  'monthly' => 2419200,
)	;0
249 105  JMPZ/43                   ?0        16?0                 ?251                	;0	>>251
250 106  GOTO/253                  ?0        ?190                 ?189                	;0
251 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'getmypid'      	;0	<<249
252 108  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
253 108  ASSIGN/38                 ?117      16?14                $132                	;0
254 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'file_exists'   	;1
255 109  FETCH_STATIC_PROP_R/173   $134=     194:'rSettings'      195:'XUI'           	;0
256 109  FETCH_DIM_R/81            $135=     $134                 197:'backups_pid'   	;0
257 109  CONCAT/8                  #136=     198:'/proc/'         $135                	;0
258 109  SEND_VAL_EX/116           ?80       #136                 ?1                  	;0
259 109  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
260 109  JMPZ_EX/46                #138=     $137                 ?268                	;0	>>268
261 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'strlen'        	;1
262 109  FETCH_STATIC_PROP_FUNC_ARG/177 $139=     201:'rSettings'      202:'XUI'           	;1
263 109  FETCH_DIM_FUNC_ARG/93     $140=     $139                 204:'backups_pid'   	;1
264 109  SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
265 109  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
266 109  IS_SMALLER/19             #142=     205:0                $141                	;0
267 109  BOOL/52                   #138=     #142                 ?0                  	;0
268 109  JMPZ/43                   ?0        #138                 ?270                	;0	>>270	<<260
269 110  GOTO/253                  ?0        ?189                 ?206                	;0
270 112  INIT_METHOD_CALL/112      ?0        16?8                 207:'query'         	;2	<<268
271 112  SEND_VAL_EX/116           ?80       209:'UPDATE `settings` SET `backups_pid` = ?;' ?1                  	;0
272 112  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
273 112  DO_FCALL/60               ?127      ?0                   ?0                  	;0
274 113  GOTO/253                  ?0        ?188                 ?210                	;0
275 115  ISSET_ISEMPTY_PROP_OBJ/148 #144=     16?3                 211:'error'         	;33554432
276 115  BOOL_NOT/13               #145=     #144                 ?0                  	;0
277 115  JMPZ/43                   ?0        #145                 ?279                	;0	>>279
278 116  GOTO/253                  ?0        ?303                 ?212                	;0
279 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'json_decode'   	;2	<<277,295
280 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'explode'       	;2
281 119  SEND_VAL_EX/116           ?80       217:', in apiCall'   ?1                  	;0
282 119  FETCH_OBJ_R/82            $146=     16?3                 218:'error'         	;0
283 119  INIT_METHOD_CALL/112      ?0        $146                 219:'getMessage'    	;0
284 119  DO_FCALL/60               $147=     ?0                   ?0                  	;0
285 119  SEND_VAR_NO_REF_EX/50     ?96       $147                 ?2                  	;0
286 119  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
287 119  SEPARATE/156              $148=     $148                 ?0                  	;0
288 119  FETCH_DIM_FUNC_ARG/93     $149=     $148                 221:0               	;1
289 119  SEND_VAR_EX/66            ?80       $149                 ?1                  	;0
290 119  SEND_VAL_EX/116           ?96       222:true             ?2                  	;0
291 119  DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
292 119  FETCH_DIM_R/81            $151=     $150                 223:'error_summary' 	;0
293 119  ASSIGN/38                 ?136      16?5                 $151                	;0
294 119  JMP/42                    ?0        ?297                 ?0                  	;0	>>297
295 120  CATCH/107                 ?1        224:'exception'      16?15               	;0 CB	>>297,279
296 121  ASSIGN/38                 ?137      16?5                 226:'Unknown error' 	;0
297 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'file_put_contents'	;2	<<294,295
298 123  CONCAT/8                  #154=     16?4                 229:'.error'        	;0
299 123  SEND_VAL_EX/116           ?80       #154                 ?1                  	;0
300 123  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
301 123  DO_FCALL_BY_NAME/131      ?139      ?0                   ?0                  	;0
302 124  GOTO/253                  ?0        ?154                 ?230                	;0
303 126  GOTO/253                  ?0        ?35                  ?231                	;0
304 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'set_time_limit'	;1
305 129  SEND_VAL_EX/116           ?80       234:0                ?1                  	;0
306 129  DO_FCALL_BY_NAME/131      ?140      ?0                   ?0                  	;0
307 130  BEGIN_SILENCE/57          #157=     ?0                   ?0                  	;0
308 130  FETCH_R/80                $158=     235:'argc'           ?0                  	;268435456
309 130  END_SILENCE/58            ?0        #157                 ?0                  	;0
310 130  JMPZ/43                   ?0        $158                 ?312                	;0	>>312
311 131  GOTO/253                  ?0        ?313                 ?236                	;0
312 133  EXIT/79                   ?0        237:0                ?0                  	;0	<<310
313 135  GOTO/253                  ?0        ?336                 ?238                	;0
314 137  GOTO/253                  ?0        ?158                 ?239                	;0
315 139  FETCH_STATIC_PROP_R/173   $159=     240:'rSettings'      241:'XUI'           	;0
316 139  FETCH_DIM_R/81            $160=     $159                 243:'dropbox_remote'	;0
317 139  BOOL_NOT/13               #161=     $160                 ?0                  	;0
318 139  JMPZ/43                   ?0        #161                 ?320                	;0	>>320
319 140  GOTO/253                  ?0        ?158                 ?244                	;0
320 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'file_put_contents'	;2	<<318
321 142  CONCAT/8                  #162=     16?4                 247:'.uploading'    	;0
322 142  SEND_VAL_EX/116           ?80       #162                 ?1                  	;0
323 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'time'          	;0
324 142  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
325 142  SEND_VAR_NO_REF_EX/50     ?96       $163                 ?2                  	;0
326 142  DO_FCALL_BY_NAME/131      ?148      ?0                   ?0                  	;0
327 143  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'Eeffde114C5F721a'	;2
328 143  INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'basename'      	;1
329 143  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
330 143  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
331 143  SEND_VAR_NO_REF_EX/50     ?80       $165                 ?1                  	;0
332 143  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
333 143  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
334 143  ASSIGN/38                 ?151      16?3                 $166                	;0
335 144  GOTO/253                  ?0        ?275                 ?254                	;0
336 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   255:'str_replace'   	;3
337 146  SEND_VAL_EX/116           ?80       257:'\\'             ?1                  	;0
338 146  SEND_VAL_EX/116           ?96       258:'/'              ?2                  	;0
339 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'dirname'       	;1
340 146  FETCH_DIM_FUNC_ARG/93     $168=     16?13                261:0               	;1
341 146  SEND_VAR_EX/66            ?80       $168                 ?1                  	;0
342 146  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
343 146  SEND_VAR_NO_REF_EX/50     ?112      $169                 ?3                  	;0
344 146  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
345 146  CONCAT/8                  #171=     $170                 262:'/../includes/admin.php'	;0
346 146  INCLUDE_OR_EVAL/73        ?156      #171                 ?0                  	;8
347 147  FETCH_CONSTANT/99         #174=     ?0                   266:'SERVER_ID'     	;16
348 147  FETCH_STATIC_PROP_R/173   $173=     263:'rServers'       264:'XUI'           	;0
349 147  FETCH_DIM_R/81            $175=     $173                 #174                	;0
350 147  FETCH_DIM_R/81            $176=     $175                 269:'is_main'       	;0
351 147  JMPZ/43                   ?0        $176                 ?353                	;0	>>353
352 148  GOTO/253                  ?0        ?354                 ?270                	;0
353 150  EXIT/79                   ?0        271:'Please run on main server.' ?0                  	;0	<<351
354 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'cli_set_process_title'	;1
355 152  SEND_VAL_EX/116           ?80       274:'XUI[Backups]'   ?1                  	;0
356 152  DO_FCALL_BY_NAME/131      ?161      ?0                   ?0                  	;0
357 153  GOTO/253                  ?0        ?219                 ?275                	;0
358 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   276:'array_slice'   	;3
359 155  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
360 155  SEND_VAL_EX/116           ?96       278:0                ?2                  	;0
361 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'count'         	;1
362 155  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
363 155  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
364 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'intval'        	;1
365 155  FETCH_STATIC_PROP_FUNC_ARG/177 $179=     283:'rSettings'      284:'XUI'           	;1
366 155  FETCH_DIM_FUNC_ARG/93     $180=     $179                 286:'dropbox_keep'  	;1
367 155  SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
368 155  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
369 155  SUB/2                     #182=     $178                 $181                	;0
370 155  SEND_VAL_EX/116           ?112      #182                 ?3                  	;0
371 155  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
372 155  ASSIGN/38                 ?168      16?6                 $183                	;0
373 156  FE_RESET_R/77             $185=     16?6                 ?382                	;0
374 156  FE_FETCH_R/78             ?0        $185                 16?7                	;382	>>382	<<381
375 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'E167B0A8DA1AD2A4'	;1	<<380
376 158  FETCH_DIM_FUNC_ARG/93     $186=     16?7                 289:'path'          	;1
377 158  SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
378 158  DO_FCALL_BY_NAME/131      ?171      ?0                   ?0                  	;0
379 158  JMP/42                    ?0        ?381                 ?0                  	;0	>>381
380 159  CATCH/107                 ?1        290:'exception'      16?15               	;0 CB	>>381,375
381 161  JMP/42                    ?0        ?374                 ?0                  	;0	>>374	<<379,380
382 161  FE_FREE/127               ?0        $185                 ?0                  	;0	<<373
383 166  GOTO/253                  ?0        ?384                 ?292                	;0
384 168  BEGIN_SILENCE/57          #188=     ?0                   ?0                  	;0
385 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   293:'unlink'        	;1
386 168  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
387 168  DO_FCALL_BY_NAME/131      ?173      ?0                   ?0                  	;0
388 168  END_SILENCE/58            ?0        #188                 ?0                  	;0
389 169  NOP/0                     ?0        295:1                ?0                  	;4294967295
*/

?>