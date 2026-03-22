<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?3113                ?0                  	;0	>>3113
1    6     INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_put_contents'	;2
2    6     FETCH_CONSTANT/99         #32=      ?0                   3:'TMP_PATH'        	;16
3    6     CONCAT/8                  #33=      #32                  6:'.migration.pid'  	;0
4    6     SEND_VAL_EX/116           ?80       #33                  ?1                  	;0
5    6     INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'getmypid'        	;0
6    6     DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
7    6     SEND_VAR_NO_REF_EX/50     ?96       $34                  ?2                  	;0
8    6     DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
9    7     INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'file_put_contents'	;2
10   7     FETCH_CONSTANT/99         #36=      ?0                   11:'TMP_PATH'       	;16
11   7     CONCAT/8                  #37=      #36                  14:'.migration.status'	;0
12   7     SEND_VAL_EX/116           ?80       #37                  ?1                  	;0
13   7     SEND_VAL_EX/116           ?96       15:1                 ?2                  	;0
14   7     DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
15   8     NEW/68                    $39=      16:'Database'        ?128                	;2
16   8     SEND_VAL_EX/116           ?80       18:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
17   8     SEND_VAL_EX/116           ?96       19:true              ?2                  	;0
18   8     DO_FCALL/60               ?8        ?8                   ?0                  	;0
19   8     ASSIGN/38                 ?9        16?0                 $39                 	;0
20   9     FETCH_OBJ_R/82            $42=      16?0                 20:'connected'      	;0
21   9     BOOL_NOT/13               #43=      $42                  ?0                  	;0
22   9     JMPZ/43                   ?0        #43                  ?24                 	;0	>>24
23   10    GOTO/253                  ?0        ?27                  ?21                 	;0
24   12    GOTO/253                  ?0        ?25                  ?22                 	;0	<<22
25   14    ECHO/40                   ?0        23:'Connected to migration database.
' ?0                  	;0
26   15    GOTO/253                  ?0        ?45                  ?24                 	;0
27   17    ECHO/40                   ?0        25:'Failed to connect to migration database, or database is empty!
' ?0                  	;0
28   18    INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'file_put_contents'	;2
29   18    FETCH_CONSTANT/99         #44=      ?0                   28:'TMP_PATH'       	;16
30   18    CONCAT/8                  #45=      #44                  31:'.migration.status'	;0
31   18    SEND_VAL_EX/116           ?80       #45                  ?1                  	;0
32   18    SEND_VAL_EX/116           ?96       32:3                 ?2                  	;0
33   18    DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
34   19    GOTO/253                  ?0        ?44                  ?33                 	;0
35   21    INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'is_object'      	;1
36   21    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
37   21    DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
38   21    BOOL_NOT/13               #48=      $47                  ?0                  	;0
39   21    JMPZ/43                   ?0        #48                  ?41                 	;0	>>41
40   22    GOTO/253                  ?0        ?3138                ?36                 	;0
41   24    INIT_METHOD_CALL/112      ?0        16?0                 37:'close_mysql'    	;0	<<39
42   24    DO_FCALL/60               ?17       ?0                   ?0                  	;0
43   25    GOTO/253                  ?0        ?3138                ?39                 	;0
44   27    EXIT/79                   ?0        ?0                   ?0                  	;0
45   29    INIT_METHOD_CALL/112      ?0        16?0                 40:'query'          	;1
46   29    SEND_VAL_EX/116           ?80       42:'SHOW TABLES LIKE \'access_codes\';' ?1                  	;0
47   29    DO_FCALL/60               ?18       ?0                   ?0                  	;0
48   30    INIT_METHOD_CALL/112      ?0        16?0                 43:'num_rows'       	;0
49   30    DO_FCALL/60               $51=      ?0                   ?0                  	;0
50   30    IS_SMALLER/19             #52=      45:0                 $51                 	;0
51   30    BOOL_NOT/13               #53=      #52                  ?0                  	;0
52   30    JMPZ/43                   ?0        #53                  ?54                 	;0	>>54
53   31    GOTO/253                  ?0        ?57                  ?46                 	;0
54   33    ECHO/40                   ?0        47:'
Can\'t migrate from XUI to XUI! Use the restore functions instead.

' ?0                  	;0	<<52
55   34    GOTO/253                  ?0        ?56                  ?48                 	;0
56   36    EXIT/79                   ?0        ?0                   ?0                  	;0
57   38    NOP/0                     ?0        ?0                   ?0                  	;0
58   39    GOTO/253                  ?0        ?2218                ?49                 	;0	<<3079
59   43    INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'in_array'       	;2
60   43    SEND_VAL_EX/116           ?80       52:'streaming_servers' ?1                  	;0
61   43    SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
62   43    DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
63   43    BOOL_NOT/13               #55=      $54                  ?0                  	;0
64   43    JMPZ/43                   ?0        #55                  ?66                 	;0	>>66
65   44    GOTO/253                  ?0        ?557                 ?53                 	;0
66   46    INIT_METHOD_CALL/112      ?0        16?0                 54:'query'          	;1	<<64
67   46    SEND_VAL_EX/116           ?80       56:'SELECT * FROM `streaming_servers`;' ?1                  	;0
68   46    DO_FCALL/60               ?24       ?0                   ?0                  	;0
69   47    INIT_METHOD_CALL/112      ?0        16?0                 57:'get_rows'       	;0
70   47    DO_FCALL/60               $57=      ?0                   ?0                  	;0
71   47    ASSIGN/38                 ?26       16?2                 $57                 	;0
72   48    GOTO/253                  ?0        ?464                 ?59                 	;0
73   50    FE_RESET_R/77             $59=      16?2                 ?115                	;0
74   50    FE_FETCH_R/78             ?0        $59                  16?3                	;115	>>115	<<114
75   52    FETCH_DIM_R/81            $61=      16?3                 61:'reset_stb_data' 	;0	<<110
76   52    ASSIGN_DIM/147            ?28       16?3                 60:'can_view_vod'   	;0
77   52    OP_DATA/137               ?0        $61                  ?0                  	;0
78   53    ASSIGN_DIM/147            ?30       16?3                 62:'allow_restrictions'	;0
79   53    OP_DATA/137               ?0        63:1                 ?0                  	;0
80   54    ASSIGN_DIM/147            ?31       16?3                 64:'allow_change_username'	;0
81   54    OP_DATA/137               ?0        65:1                 ?0                  	;0
82   55    ASSIGN_DIM/147            ?32       16?3                 66:'allow_change_password'	;0
83   55    OP_DATA/137               ?0        67:1                 ?0                  	;0
84   56    ASSIGN_DIM/147            ?33       16?3                 68:'minimum_username_length'	;0
85   56    OP_DATA/137               ?0        69:8                 ?0                  	;0
86   57    ASSIGN_DIM/147            ?34       16?3                 70:'minimum_password_length'	;0
87   57    OP_DATA/137               ?0        71:8                 ?0                  	;0
88   58    INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'C73Ed8D0b70CE12F'	;2
89   58    SEND_VAL_EX/116           ?80       74:'users_groups'    ?1                  	;0
90   58    SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
91   58    DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
92   58    ASSIGN/38                 ?36       16?3                 $67                 	;0
93   59    INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'c483A3a59265139E'	;1
94   59    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
95   59    DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
96   59    ASSIGN/38                 ?38       16?4                 $69                 	;0
97   60    FETCH_DIM_R/81            $71=      16?4                 77:'columns'        	;0
98   60    CONCAT/8                  #72=      78:'INSERT INTO `users_groups`(' $71                 	;0
99   60    CONCAT/8                  #73=      #72                  79:') VALUES('      	;0
100  60    FETCH_DIM_R/81            $74=      16?4                 80:'placeholder'    	;0
101  60    CONCAT/8                  #75=      #73                  $74                 	;0
102  60    CONCAT/8                  #76=      #75                  81:');'             	;0
103  60    ASSIGN/38                 ?45       16?5                 #76                 	;0
104  61    INIT_METHOD_CALL/112      ?0        16?6                 82:'query'          	;1
105  61    SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
106  61    FETCH_DIM_R/81            $78=      16?4                 84:'data'           	;0
107  61    SEND_UNPACK/165           ?80       $78                  ?1                  	;0
108  61    DO_FCALL/60               ?47       ?0                   ?0                  	;0
109  61    JMP/42                    ?0        ?114                 ?0                  	;0	>>114
110  62    CATCH/107                 ?1        85:'Exception'       16?7                	;0 CB	>>114,75
111  63    CONCAT/8                  #80=      87:'Error: '         16?7                	;0
112  63    CONCAT/8                  #81=      #80                  88:'
'              	;0
113  63    ECHO/40                   ?0        #81                  ?0                  	;0
114  65    JMP/42                    ?0        ?74                  ?0                  	;0	>>74	<<109,110
115  65    FE_FREE/127               ?0        $59                  ?0                  	;0	<<73
116  70    INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'in_array'       	;2
117  70    SEND_VAL_EX/116           ?80       91:'groups'          ?1                  	;0
118  70    SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
119  70    DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
120  70    BOOL_NOT/13               #83=      $82                  ?0                  	;0
121  70    JMPZ/43                   ?0        #83                  ?123                	;0	>>123
122  71    GOTO/253                  ?0        ?167                 ?92                 	;0
123  73    GOTO/253                  ?0        ?1212                ?93                 	;0	<<121
124  75    FE_RESET_R/77             $84=      16?2                 ?166                	;0
125  75    FE_FETCH_R/78             ?0        $84                  16?3                	;166	>>166	<<165
126  77    FETCH_DIM_R/81            $86=      16?3                 95:'reset_stb_data' 	;0	<<161
127  77    ASSIGN_DIM/147            ?53       16?3                 94:'can_view_vod'   	;0
128  77    OP_DATA/137               ?0        $86                  ?0                  	;0
129  78    ASSIGN_DIM/147            ?55       16?3                 96:'allow_restrictions'	;0
130  78    OP_DATA/137               ?0        97:1                 ?0                  	;0
131  79    ASSIGN_DIM/147            ?56       16?3                 98:'allow_change_username'	;0
132  79    OP_DATA/137               ?0        99:1                 ?0                  	;0
133  80    ASSIGN_DIM/147            ?57       16?3                 100:'allow_change_password'	;0
134  80    OP_DATA/137               ?0        101:1                ?0                  	;0
135  81    ASSIGN_DIM/147            ?58       16?3                 102:'minimum_username_length'	;0
136  81    OP_DATA/137               ?0        103:8                ?0                  	;0
137  82    ASSIGN_DIM/147            ?59       16?3                 104:'minimum_password_length'	;0
138  82    OP_DATA/137               ?0        105:8                ?0                  	;0
139  83    INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'C73Ed8D0B70Ce12F'	;2
140  83    SEND_VAL_EX/116           ?80       108:'users_groups'   ?1                  	;0
141  83    SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
142  83    DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
143  83    ASSIGN/38                 ?61       16?3                 $92                 	;0
144  84    INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'C483A3A59265139E'	;1
145  84    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
146  84    DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
147  84    ASSIGN/38                 ?63       16?4                 $94                 	;0
148  85    FETCH_DIM_R/81            $96=      16?4                 111:'columns'       	;0
149  85    CONCAT/8                  #97=      112:'INSERT INTO `users_groups`(' $96                 	;0
150  85    CONCAT/8                  #98=      #97                  113:') VALUES('     	;0
151  85    FETCH_DIM_R/81            $99=      16?4                 114:'placeholder'   	;0
152  85    CONCAT/8                  #100=     #98                  $99                 	;0
153  85    CONCAT/8                  #101=     #100                 115:');'            	;0
154  85    ASSIGN/38                 ?70       16?5                 #101                	;0
155  86    INIT_METHOD_CALL/112      ?0        16?6                 116:'query'         	;1
156  86    SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
157  86    FETCH_DIM_R/81            $103=     16?4                 118:'data'          	;0
158  86    SEND_UNPACK/165           ?80       $103                 ?1                  	;0
159  86    DO_FCALL/60               ?72       ?0                   ?0                  	;0
160  86    JMP/42                    ?0        ?165                 ?0                  	;0	>>165
161  87    CATCH/107                 ?1        119:'Exception'      16?7                	;0 CB	>>165,126
162  88    CONCAT/8                  #105=     121:'Error: '        16?7                	;0
163  88    CONCAT/8                  #106=     #105                 122:'
'             	;0
164  88    ECHO/40                   ?0        #106                 ?0                  	;0
165  90    JMP/42                    ?0        ?125                 ?0                  	;0	>>125	<<160,161
166  90    FE_FREE/127               ?0        $84                  ?0                  	;0	<<124
167  95    INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'in_array'      	;2
168  95    SEND_VAL_EX/116           ?80       125:'groups'         ?1                  	;0
169  95    SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
170  95    DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
171  95    BOOL_NOT/13               #108=     $107                 ?0                  	;0
172  95    JMPZ/43                   ?0        #108                 ?174                	;0	>>174
173  96    GOTO/253                  ?0        ?1348                ?126                	;0
174  98    GOTO/253                  ?0        ?1617                ?127                	;0	<<172
175  101   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'in_array'      	;2
176  101   SEND_VAL_EX/116           ?80       130:'categories'     ?1                  	;0
177  101   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
178  101   DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
179  101   BOOL_NOT/13               #110=     $109                 ?0                  	;0
180  101   JMPZ/43                   ?0        #110                 ?182                	;0	>>182
181  102   GOTO/253                  ?0        ?1508                ?131                	;0
182  104   INIT_METHOD_CALL/112      ?0        16?0                 132:'query'         	;1	<<180
183  104   SEND_VAL_EX/116           ?80       134:'SELECT * FROM `categories`;' ?1                  	;0
184  104   DO_FCALL/60               ?79       ?0                   ?0                  	;0
185  105   INIT_METHOD_CALL/112      ?0        16?0                 135:'get_rows'      	;0
186  105   DO_FCALL/60               $112=     ?0                   ?0                  	;0
187  105   ASSIGN/38                 ?81       16?2                 $112                	;0
188  106   INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'count'         	;1
189  106   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
190  106   DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
191  106   IS_SMALLER/19             #115=     139:0                $114                	;0
192  106   BOOL_NOT/13               #116=     #115                 ?0                  	;0
193  106   JMPZ/43                   ?0        #116                 ?195                	;0	>>195
194  107   GOTO/253                  ?0        ?2446                ?140                	;0
195  109   GOTO/253                  ?0        ?2403                ?141                	;0	<<193
196  111   INIT_METHOD_CALL/112      ?0        16?6                 142:'query'         	;1
197  111   SEND_VAL_EX/116           ?80       144:'TRUNCATE `blocked_uas`;' ?1                  	;0
198  111   DO_FCALL/60               ?85       ?0                   ?0                  	;0
199  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'number_format' 	;2
200  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'count'         	;1
201  112   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
202  112   DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
203  112   SEND_VAR_NO_REF_EX/50     ?80       $118                 ?1                  	;0
204  112   SEND_VAL_EX/116           ?96       149:0                ?2                  	;0
205  112   DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
206  112   CONCAT/8                  #120=     150:'Blocking '      $119                	;0
207  112   CONCAT/8                  #121=     #120                 151:' user-agents.
'	;0
208  112   ECHO/40                   ?0        #121                 ?0                  	;0
209  113   FE_RESET_R/77             $122=     16?2                 ?238                	;0
210  113   FE_FETCH_R/78             ?0        $122                 16?3                	;238	>>238	<<237
211  115   INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'c73ed8D0B70Ce12f'	;2	<<233
212  115   SEND_VAL_EX/116           ?80       154:'blocked_uas'    ?1                  	;0
213  115   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
214  115   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
215  115   ASSIGN/38                 ?92       16?3                 $123                	;0
216  116   INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'C483A3A59265139e'	;1
217  116   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
218  116   DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
219  116   ASSIGN/38                 ?94       16?4                 $125                	;0
220  117   FETCH_DIM_R/81            $127=     16?4                 157:'columns'       	;0
221  117   CONCAT/8                  #128=     158:'INSERT INTO `blocked_uas`(' $127                	;0
222  117   CONCAT/8                  #129=     #128                 159:') VALUES('     	;0
223  117   FETCH_DIM_R/81            $130=     16?4                 160:'placeholder'   	;0
224  117   CONCAT/8                  #131=     #129                 $130                	;0
225  117   CONCAT/8                  #132=     #131                 161:');'            	;0
226  117   ASSIGN/38                 ?101      16?5                 #132                	;0
227  118   INIT_METHOD_CALL/112      ?0        16?6                 162:'query'         	;1
228  118   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
229  118   FETCH_DIM_R/81            $134=     16?4                 164:'data'          	;0
230  118   SEND_UNPACK/165           ?80       $134                 ?1                  	;0
231  118   DO_FCALL/60               ?103      ?0                   ?0                  	;0
232  118   JMP/42                    ?0        ?237                 ?0                  	;0	>>237
233  119   CATCH/107                 ?1        165:'Exception'      16?7                	;0 CB	>>237,211
234  120   CONCAT/8                  #136=     167:'Error: '        16?7                	;0
235  120   CONCAT/8                  #137=     #136                 168:'
'             	;0
236  120   ECHO/40                   ?0        #137                 ?0                  	;0
237  122   JMP/42                    ?0        ?210                 ?0                  	;0	>>210	<<232,233
238  122   FE_FREE/127               ?0        $122                 ?0                  	;0	<<209
239  126   GOTO/253                  ?0        ?1850                ?169                	;0
240  128   FE_RESET_R/77             $138=     16?8                 ?344                	;0
241  128   FE_FETCH_R/78             ?0        $138                 16?9                	;344	>>344	<<343
242  130   INIT_METHOD_CALL/112      ?0        16?0                 170:'query'         	;1	<<339
243  130   CONCAT/8                  #139=     172:'SELECT * FROM `users` LIMIT ' 16?9                	;0
244  130   CONCAT/8                  #140=     #139                 173:', 1000;'       	;0
245  130   SEND_VAL_EX/116           ?80       #140                 ?1                  	;0
246  130   DO_FCALL/60               ?109      ?0                   ?0                  	;0
247  131   INIT_METHOD_CALL/112      ?0        16?0                 174:'get_rows'      	;0
248  131   DO_FCALL/60               $142=     ?0                   ?0                  	;0
249  131   ASSIGN/38                 ?111      16?2                 $142                	;0
250  132   FE_RESET_R/77             $144=     16?2                 ?337                	;0
251  132   FE_FETCH_R/78             ?0        $144                 16?3                	;337	>>337	<<336
252  133   NOP/0                     ?0        ?0                   ?0                  	;1
253  133   NOP/0                     ?0        ?0                   ?0                  	;1
254  133   GOTO/253                  ?0        ?255                 ?176                	;0
255  135   ISSET_ISEMPTY_DIM_OBJ/115 #145=     16?3                 177:'isp_desc'      	;16777216
256  135   BOOL_NOT/13               #146=     #145                 ?0                  	;0
257  135   JMPZ/43                   ?0        #146                 ?261                	;0	>>261
258  136   NOP/0                     ?0        ?0                   ?0                  	;1
259  136   NOP/0                     ?0        ?0                   ?0                  	;1
260  136   GOTO/253                  ?0        ?263                 ?178                	;0
261  138   ASSIGN_DIM/147            ?115      16?3                 179:'isp_desc'      	;0	<<257
262  138   OP_DATA/137               ?0        180:NULL             ?0                  	;0
263  140   FETCH_DIM_R/81            $148=     16?3                 181:'id'            	;0
264  140   ISSET_ISEMPTY_DIM_OBJ/115 #149=     16?10                $148                	;33554432
265  140   BOOL_NOT/13               #150=     #149                 ?0                  	;0
266  140   JMPZ/43                   ?0        #150                 ?270                	;0	>>270
267  141   NOP/0                     ?0        ?0                   ?0                  	;1
268  141   NOP/0                     ?0        ?0                   ?0                  	;1
269  141   GOTO/253                  ?0        ?307                 ?182                	;0
270  143   INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'implode'       	;2	<<266
271  143   SEND_VAL_EX/116           ?80       186:','              ?1                  	;0
272  143   FETCH_DIM_R/81            $152=     16?3                 187:'id'            	;0
273  143   FETCH_DIM_FUNC_ARG/93     $153=     16?10                $152                	;2
274  143   SEND_VAR_EX/66            ?96       $153                 ?2                  	;0
275  143   DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
276  143   CONCAT/8                  #155=     188:'['              $154                	;0
277  143   CONCAT/8                  #156=     #155                 189:']'             	;0
278  143   ASSIGN_DIM/147            ?119      16?3                 183:'allowed_outputs'	;0
279  143   OP_DATA/137               ?0        #156                 ?0                  	;0
280  144   NOP/0                     ?0        ?0                   ?0                  	;1
281  144   NOP/0                     ?0        ?0                   ?0                  	;1
282  144   GOTO/253                  ?0        ?307                 ?190                	;0
283  146   INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'c73Ed8d0b70Ce12f'	;2
284  146   SEND_VAL_EX/116           ?80       193:'lines'          ?1                  	;0
285  146   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
286  146   DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
287  146   ASSIGN/38                 ?126      16?3                 $157                	;0
288  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'C483A3A59265139E'	;1
289  147   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
290  147   DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
291  147   ASSIGN/38                 ?128      16?4                 $159                	;0
292  148   FETCH_DIM_R/81            $161=     16?4                 196:'columns'       	;0
293  148   CONCAT/8                  #162=     197:'INSERT INTO `lines`(' $161                	;0
294  148   CONCAT/8                  #163=     #162                 198:') VALUES('     	;0
295  148   FETCH_DIM_R/81            $164=     16?4                 199:'placeholder'   	;0
296  148   CONCAT/8                  #165=     #163                 $164                	;0
297  148   CONCAT/8                  #166=     #165                 200:');'            	;0
298  148   ASSIGN/38                 ?135      16?5                 #166                	;0
299  149   INIT_METHOD_CALL/112      ?0        16?6                 201:'query'         	;1
300  149   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
301  149   FETCH_DIM_R/81            $168=     16?4                 203:'data'          	;0
302  149   SEND_UNPACK/165           ?80       $168                 ?1                  	;0
303  149   DO_FCALL/60               ?137      ?0                   ?0                  	;0
304  151   NOP/0                     ?0        ?0                   ?0                  	;1
305  151   NOP/0                     ?0        ?0                   ?0                  	;1
306  151   GOTO/253                  ?0        ?336                 ?204                	;0
307  154   ISSET_ISEMPTY_DIM_OBJ/115 #170=     16?3                 205:'output'        	;33554432
308  154   BOOL_NOT/13               #171=     #170                 ?0                  	;0
309  154   JMPZ/43                   ?0        #171                 ?313                	;0	>>313
310  155   NOP/0                     ?0        ?0                   ?0                  	;1
311  155   NOP/0                     ?0        ?0                   ?0                  	;1
312  155   GOTO/253                  ?0        ?316                 ?206                	;0
313  157   FETCH_DIM_R/81            $173=     16?3                 208:'output'        	;0	<<309
314  157   ASSIGN_DIM/147            ?140      16?3                 207:'allowed_outputs'	;0
315  157   OP_DATA/137               ?0        $173                 ?0                  	;0
316  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'implode'       	;2
317  159   SEND_VAL_EX/116           ?80       212:','              ?1                  	;0
318  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'array_map'     	;2
319  159   SEND_VAL_EX/116           ?80       215:'intval'         ?1                  	;0
320  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'json_decode'   	;2
321  159   FETCH_DIM_FUNC_ARG/93     $175=     16?3                 218:'bouquet'       	;1
322  159   SEND_VAR_EX/66            ?80       $175                 ?1                  	;0
323  159   SEND_VAL_EX/116           ?96       219:true             ?2                  	;0
324  159   DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
325  159   SEND_VAR_NO_REF_EX/50     ?96       $176                 ?2                  	;0
326  159   DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
327  159   SEND_VAR_NO_REF_EX/50     ?96       $177                 ?2                  	;0
328  159   DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
329  159   CONCAT/8                  #179=     220:'['              $178                	;0
330  159   CONCAT/8                  #180=     #179                 221:']'             	;0
331  159   ASSIGN_DIM/147            ?142      16?3                 209:'bouquet'       	;0
332  159   OP_DATA/137               ?0        #180                 ?0                  	;0
333  160   NOP/0                     ?0        ?0                   ?0                  	;1
334  160   NOP/0                     ?0        ?0                   ?0                  	;1
335  160   GOTO/253                  ?0        ?283                 ?222                	;0
336  161   JMP/42                    ?0        ?251                 ?0                  	;0	>>251
337  161   FE_FREE/127               ?0        $144                 ?0                  	;0	<<250
338  163   JMP/42                    ?0        ?343                 ?0                  	;0	>>343
339  164   CATCH/107                 ?1        223:'Exception'      16?7                	;0 CB	>>343,242
340  165   CONCAT/8                  #181=     225:'Error: '        16?7                	;0
341  165   CONCAT/8                  #182=     #181                 226:'
'             	;0
342  165   ECHO/40                   ?0        #182                 ?0                  	;0
343  167   JMP/42                    ?0        ?241                 ?0                  	;0	>>241	<<338,339
344  167   FE_FREE/127               ?0        $138                 ?0                  	;0	<<240
345  172   NOP/0                     ?0        ?0                   ?0                  	;0
346  173   GOTO/253                  ?0        ?407                 ?227                	;0	<<453
347  175   FE_RESET_R/77             $183=     16?2                 ?405                	;0
348  175   FE_FETCH_R/78             ?0        $183                 16?3                	;405	>>405	<<404
349  176   INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'c73eD8D0b70Ce12f'	;2
350  176   SEND_VAL_EX/116           ?80       230:'watch_folders'  ?1                  	;0
351  176   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
352  176   DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
353  176   ASSIGN/38                 ?153      16?3                 $184                	;0
354  177   INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'implode'       	;2
355  177   SEND_VAL_EX/116           ?80       234:','              ?1                  	;0
356  177   INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'array_map'     	;2
357  177   SEND_VAL_EX/116           ?80       237:'intval'         ?1                  	;0
358  177   INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'json_decode'   	;2
359  177   FETCH_DIM_FUNC_ARG/93     $187=     16?3                 240:'bouquets'      	;1
360  177   SEND_VAR_EX/66            ?80       $187                 ?1                  	;0
361  177   SEND_VAL_EX/116           ?96       241:true             ?2                  	;0
362  177   DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
363  177   SEND_VAR_NO_REF_EX/50     ?96       $188                 ?2                  	;0
364  177   DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
365  177   SEND_VAR_NO_REF_EX/50     ?96       $189                 ?2                  	;0
366  177   DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
367  177   CONCAT/8                  #191=     242:'['              $190                	;0
368  177   CONCAT/8                  #192=     #191                 243:']'             	;0
369  177   ASSIGN_DIM/147            ?154      16?3                 231:'bouquets'      	;0
370  177   OP_DATA/137               ?0        #192                 ?0                  	;0
371  178   INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'implode'       	;2
372  178   SEND_VAL_EX/116           ?80       247:','              ?1                  	;0
373  178   INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'array_map'     	;2
374  178   SEND_VAL_EX/116           ?80       250:'intval'         ?1                  	;0
375  178   INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'json_decode'   	;2
376  178   FETCH_DIM_FUNC_ARG/93     $194=     16?3                 253:'fb_bouquets'   	;1
377  178   SEND_VAR_EX/66            ?80       $194                 ?1                  	;0
378  178   SEND_VAL_EX/116           ?96       254:true             ?2                  	;0
379  178   DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
380  178   SEND_VAR_NO_REF_EX/50     ?96       $195                 ?2                  	;0
381  178   DO_FCALL_BY_NAME/131      $196=     ?0                   ?0                  	;0
382  178   SEND_VAR_NO_REF_EX/50     ?96       $196                 ?2                  	;0
383  178   DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
384  178   CONCAT/8                  #198=     255:'['              $197                	;0
385  178   CONCAT/8                  #199=     #198                 256:']'             	;0
386  178   ASSIGN_DIM/147            ?161      16?3                 244:'fb_bouquets'   	;0
387  178   OP_DATA/137               ?0        #199                 ?0                  	;0
388  179   INIT_FCALL_BY_NAME/59     ?0        ?0                   257:'c483A3A59265139E'	;1
389  179   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
390  179   DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
391  179   ASSIGN/38                 ?169      16?4                 $200                	;0
392  180   FETCH_DIM_R/81            $202=     16?4                 259:'columns'       	;0
393  180   CONCAT/8                  #203=     260:'INSERT INTO `watch_folders`(' $202                	;0
394  180   CONCAT/8                  #204=     #203                 261:') VALUES('     	;0
395  180   FETCH_DIM_R/81            $205=     16?4                 262:'placeholder'   	;0
396  180   CONCAT/8                  #206=     #204                 $205                	;0
397  180   CONCAT/8                  #207=     #206                 263:');'            	;0
398  180   ASSIGN/38                 ?176      16?5                 #207                	;0
399  181   INIT_METHOD_CALL/112      ?0        16?6                 264:'query'         	;1
400  181   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
401  181   FETCH_DIM_R/81            $209=     16?4                 266:'data'          	;0
402  181   SEND_UNPACK/165           ?80       $209                 ?1                  	;0
403  181   DO_FCALL/60               ?178      ?0                   ?0                  	;0
404  182   JMP/42                    ?0        ?348                 ?0                  	;0	>>348
405  182   FE_FREE/127               ?0        $183                 ?0                  	;0	<<347
406  188   GOTO/253                  ?0        ?452                 ?267                	;0
407  190   INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'in_array'      	;2
408  190   SEND_VAL_EX/116           ?80       270:'watch_folders'  ?1                  	;0
409  190   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
410  190   DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
411  190   BOOL_NOT/13               #212=     $211                 ?0                  	;0
412  190   JMPZ/43                   ?0        #212                 ?414                	;0	>>414
413  191   GOTO/253                  ?0        ?406                 ?271                	;0
414  193   INIT_METHOD_CALL/112      ?0        16?0                 272:'query'         	;1	<<412
415  193   SEND_VAL_EX/116           ?80       274:'SHOW TABLES LIKE \'watch_folders\';' ?1                  	;0
416  193   DO_FCALL/60               ?181      ?0                   ?0                  	;0
417  194   INIT_METHOD_CALL/112      ?0        16?0                 275:'num_rows'      	;0
418  194   DO_FCALL/60               $214=     ?0                   ?0                  	;0
419  194   IS_SMALLER/19             #215=     277:0                $214                	;0
420  194   BOOL_NOT/13               #216=     #215                 ?0                  	;0
421  194   JMPZ/43                   ?0        #216                 ?423                	;0	>>423
422  195   GOTO/253                  ?0        ?406                 ?278                	;0
423  197   INIT_METHOD_CALL/112      ?0        16?0                 279:'query'         	;1	<<421
424  197   SEND_VAL_EX/116           ?80       281:'SELECT COUNT(*) AS `count` FROM `watch_folders`;' ?1                  	;0
425  197   DO_FCALL/60               ?185      ?0                   ?0                  	;0
426  198   INIT_METHOD_CALL/112      ?0        16?0                 282:'get_row'       	;0
427  198   DO_FCALL/60               $218=     ?0                   ?0                  	;0
428  198   FETCH_DIM_R/81            $219=     $218                 284:'count'         	;0
429  198   ASSIGN/38                 ?188      16?11                $219                	;0
430  199   GOTO/253                  ?0        ?431                 ?285                	;0
431  201   IS_SMALLER/19             #221=     286:0                16?11               	;0
432  201   BOOL_NOT/13               #222=     #221                 ?0                  	;0
433  201   JMPZ/43                   ?0        #222                 ?435                	;0	>>435
434  202   GOTO/253                  ?0        ?406                 ?287                	;0
435  204   INIT_METHOD_CALL/112      ?0        16?6                 288:'query'         	;1	<<433
436  204   SEND_VAL_EX/116           ?80       290:'TRUNCATE `watch_folders`;' ?1                  	;0
437  204   DO_FCALL/60               ?191      ?0                   ?0                  	;0
438  205   INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'number_format' 	;2
439  205   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
440  205   SEND_VAL_EX/116           ?96       293:0                ?2                  	;0
441  205   DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
442  205   CONCAT/8                  #225=     294:'Adding '        $224                	;0
443  205   CONCAT/8                  #226=     #225                 295:' folders to watch.
'	;0
444  205   ECHO/40                   ?0        #226                 ?0                  	;0
445  206   INIT_METHOD_CALL/112      ?0        16?0                 296:'query'         	;1
446  206   SEND_VAL_EX/116           ?80       298:'SELECT * FROM `watch_folders`;' ?1                  	;0
447  206   DO_FCALL/60               ?195      ?0                   ?0                  	;0
448  207   INIT_METHOD_CALL/112      ?0        16?0                 299:'get_rows'      	;0
449  207   DO_FCALL/60               $228=     ?0                   ?0                  	;0
450  207   ASSIGN/38                 ?197      16?2                 $228                	;0
451  208   GOTO/253                  ?0        ?347                 ?301                	;0
452  209   JMP/42                    ?0        ?457                 ?0                  	;0	>>457
453  210   CATCH/107                 ?1        302:'Exception'      16?7                	;0 CB	>>457,346
454  211   CONCAT/8                  #230=     304:'Error: '        16?7                	;0
455  211   CONCAT/8                  #231=     #230                 305:'
'             	;0
456  211   ECHO/40                   ?0        #231                 ?0                  	;0
457  213   GOTO/253                  ?0        ?768                 ?306                	;0	<<452,453
458  215   EXIT/79                   ?0        ?0                   ?0                  	;0
459  217   ECHO/40                   ?0        307:'
Migrating database to XUI...

' ?0                  	;0
460  218   ECHO/40                   ?0        308:'Remapping bouquets.
' ?0                  	;0
461  219   ASSIGN/38                 $232=     16?13                309:array (
)       	;0
462  219   ASSIGN/38                 ?201      16?12                $232                	;0
463  220   GOTO/253                  ?0        ?2992                ?310                	;0
464  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'count'         	;1
465  222   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
466  222   DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
467  222   IS_SMALLER/19             #235=     313:0                $234                	;0
468  222   BOOL_NOT/13               #236=     #235                 ?0                  	;0
469  222   JMPZ/43                   ?0        #236                 ?471                	;0	>>471
470  223   GOTO/253                  ?0        ?557                 ?314                	;0
471  225   ASSIGN/38                 ?205      16?14                315:false           	;0	<<469
472  226   INIT_METHOD_CALL/112      ?0        16?6                 316:'query'         	;1
473  226   SEND_VAL_EX/116           ?80       318:'TRUNCATE `servers`;' ?1                  	;0
474  226   DO_FCALL/60               ?206      ?0                   ?0                  	;0
475  227   INIT_FCALL_BY_NAME/59     ?0        ?0                   319:'number_format' 	;2
476  227   INIT_FCALL_BY_NAME/59     ?0        ?0                   321:'count'         	;1
477  227   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
478  227   DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
479  227   SEND_VAR_NO_REF_EX/50     ?80       $239                 ?1                  	;0
480  227   SEND_VAL_EX/116           ?96       323:0                ?2                  	;0
481  227   DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
482  227   CONCAT/8                  #241=     324:'Moving '        $240                	;0
483  227   CONCAT/8                  #242=     #241                 325:' servers.
'    	;0
484  227   ECHO/40                   ?0        #242                 ?0                  	;0
485  228   FE_RESET_R/77             $243=     16?2                 ?555                	;0
486  228   FE_FETCH_R/78             ?0        $243                 16?3                	;555	>>555	<<554
487  230   NOP/0                     ?0        ?0                   ?0                  	;1	<<550
488  230   GOTO/253                  ?0        ?512                 ?326                	;0
489  232   INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'C73ED8D0b70Ce12f'	;2
490  232   SEND_VAL_EX/116           ?80       329:'servers'        ?1                  	;0
491  232   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
492  232   DO_FCALL_BY_NAME/131      $244=     ?0                   ?0                  	;0
493  232   ASSIGN/38                 ?213      16?3                 $244                	;0
494  233   INIT_FCALL_BY_NAME/59     ?0        ?0                   330:'c483a3A59265139e'	;1
495  233   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
496  233   DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
497  233   ASSIGN/38                 ?215      16?4                 $246                	;0
498  234   FETCH_DIM_R/81            $248=     16?4                 332:'columns'       	;0
499  234   CONCAT/8                  #249=     333:'INSERT INTO `servers`(' $248                	;0
500  234   CONCAT/8                  #250=     #249                 334:') VALUES('     	;0
501  234   FETCH_DIM_R/81            $251=     16?4                 335:'placeholder'   	;0
502  234   CONCAT/8                  #252=     #250                 $251                	;0
503  234   CONCAT/8                  #253=     #252                 336:');'            	;0
504  234   ASSIGN/38                 ?222      16?5                 #253                	;0
505  235   INIT_METHOD_CALL/112      ?0        16?6                 337:'query'         	;1
506  235   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
507  235   FETCH_DIM_R/81            $255=     16?4                 339:'data'          	;0
508  235   SEND_UNPACK/165           ?80       $255                 ?1                  	;0
509  235   DO_FCALL/60               ?224      ?0                   ?0                  	;0
510  236   NOP/0                     ?0        ?0                   ?0                  	;1
511  236   GOTO/253                  ?0        ?549                 ?340                	;0
512  238   ASSIGN_DIM/147            ?225      16?3                 341:'server_type'   	;0
513  238   OP_DATA/137               ?0        342:0                ?0                  	;0
514  239   ASSIGN_DIM/147            ?226      16?3                 343:'parent_id'     	;0
515  239   OP_DATA/137               ?0        344:NULL             ?0                  	;0
516  240   ASSIGN_DIM/147            ?227      16?3                 345:'http_broadcast_port'	;0
517  240   OP_DATA/137               ?0        346:80               ?0                  	;0
518  241   ASSIGN_DIM/147            ?228      16?3                 347:'https_broadcast_port'	;0
519  241   OP_DATA/137               ?0        348:443              ?0                  	;0
520  242   ASSIGN_DIM/147            ?229      16?3                 349:'rtmp_port'     	;0
521  242   OP_DATA/137               ?0        350:8880             ?0                  	;0
522  243   NOP/0                     ?0        ?0                   ?0                  	;1
523  243   GOTO/253                  ?0        ?531                 ?351                	;0
524  245   NOP/0                     ?0        ?0                   ?0                  	;1
525  245   GOTO/253                  ?0        ?529                 ?352                	;0
526  247   ASSIGN_DIM/147            ?230      16?3                 353:'is_main'       	;0
527  247   OP_DATA/137               ?0        354:1                ?0                  	;0
528  248   ASSIGN/38                 ?231      16?14                355:true            	;0
529  250   NOP/0                     ?0        ?0                   ?0                  	;1
530  250   GOTO/253                  ?0        ?489                 ?356                	;0
531  252   ASSIGN_DIM/147            ?232      16?3                 357:'total_services'	;0
532  252   OP_DATA/137               ?0        358:4                ?0                  	;0
533  253   ASSIGN_DIM/147            ?233      16?3                 359:'http_ports_add'	;0
534  253   OP_DATA/137               ?0        360:NULL             ?0                  	;0
535  254   ASSIGN_DIM/147            ?234      16?3                 361:'https_ports_add'	;0
536  254   OP_DATA/137               ?0        362:NULL             ?0                  	;0
537  255   FETCH_DIM_R/81            $267=     16?3                 363:'can_delete'    	;0
538  255   IS_EQUAL/17               #268=     $267                 364:0               	;0
539  255   JMPZ_EX/46                #268=     #268                 ?542                	;0	>>542
540  255   BOOL_NOT/13               #269=     16?14                ?0                  	;0
541  255   BOOL/52                   #268=     #269                 ?0                  	;0
542  255   JMPZ/43                   ?0        #268                 ?545                	;0	>>545	<<539
543  256   NOP/0                     ?0        ?0                   ?0                  	;1
544  256   GOTO/253                  ?0        ?526                 ?365                	;0
545  258   ASSIGN_DIM/147            ?238      16?3                 366:'is_main'       	;0	<<542
546  258   OP_DATA/137               ?0        367:0                ?0                  	;0
547  259   NOP/0                     ?0        ?0                   ?0                  	;1
548  259   GOTO/253                  ?0        ?524                 ?368                	;0
549  260   JMP/42                    ?0        ?554                 ?0                  	;0	>>554
550  261   CATCH/107                 ?1        369:'Exception'      16?7                	;0 CB	>>554,487
551  262   CONCAT/8                  #271=     371:'Error: '        16?7                	;0
552  262   CONCAT/8                  #272=     #271                 372:'
'             	;0
553  262   ECHO/40                   ?0        #272                 ?0                  	;0
554  264   JMP/42                    ?0        ?486                 ?0                  	;0	>>486	<<549,550
555  264   FE_FREE/127               ?0        $243                 ?0                  	;0	<<485
556  266   GOTO/253                  ?0        ?557                 ?373                	;0
557  271   INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'in_array'      	;2
558  271   SEND_VAL_EX/116           ?80       376:'servers'        ?1                  	;0
559  271   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
560  271   DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
561  271   BOOL_NOT/13               #274=     $273                 ?0                  	;0
562  271   JMPZ/43                   ?0        #274                 ?564                	;0	>>564
563  272   GOTO/253                  ?0        ?1596                ?377                	;0
564  274   INIT_METHOD_CALL/112      ?0        16?0                 378:'query'         	;1	<<562
565  274   SEND_VAL_EX/116           ?80       380:'SELECT * FROM `servers` ORDER BY `id` ASC;' ?1                  	;0
566  274   DO_FCALL/60               ?243      ?0                   ?0                  	;0
567  275   GOTO/253                  ?0        ?2895                ?381                	;0
568  277   ASSIGN/38                 ?244      16?8                 382:array (
  0 => 0,
)	;0
569  279   FE_RESET_R/77             $277=     16?8                 ?658                	;0
570  279   FE_FETCH_R/78             ?0        $277                 16?9                	;658	>>658	<<657
571  281   INIT_METHOD_CALL/112      ?0        16?0                 383:'query'         	;1	<<653
572  281   CONCAT/8                  #278=     385:'SELECT * FROM `stream_servers` LIMIT ' 16?9                	;0
573  281   CONCAT/8                  #279=     #278                 386:', 1000;'       	;0
574  281   SEND_VAL_EX/116           ?80       #279                 ?1                  	;0
575  281   DO_FCALL/60               ?248      ?0                   ?0                  	;0
576  282   INIT_METHOD_CALL/112      ?0        16?0                 387:'get_rows'      	;0
577  282   DO_FCALL/60               $281=     ?0                   ?0                  	;0
578  282   ASSIGN/38                 ?250      16?2                 $281                	;0
579  283   INIT_FCALL_BY_NAME/59     ?0        ?0                   389:'count'         	;1
580  283   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
581  283   DO_FCALL_BY_NAME/131      $283=     ?0                   ?0                  	;0
582  283   IS_SMALLER/19             #284=     391:0                $283                	;0
583  283   BOOL_NOT/13               #285=     #284                 ?0                  	;0
584  283   JMPZ/43                   ?0        #285                 ?587                	;0	>>587
585  284   NOP/0                     ?0        ?0                   ?0                  	;1
586  284   GOTO/253                  ?0        ?652                 ?392                	;0
587  286   FE_RESET_R/77             $286=     16?2                 ?651                	;0	<<584
588  286   FE_FETCH_R/78             ?0        $286                 16?3                	;651	>>651	<<650
589  287   NOP/0                     ?0        ?0                   ?0                  	;1
590  287   NOP/0                     ?0        ?0                   ?0                  	;1
591  287   GOTO/253                  ?0        ?611                 ?393                	;0
592  289   ASSIGN_DIM/147            ?255      16?3                 394:'monitor_pid'   	;0
593  289   OP_DATA/137               ?0        395:NULL             ?0                  	;0
594  290   FETCH_DIM_R/81            $288=     16?3                 396:'pid'           	;0
595  290   IS_SMALLER_OR_EQUAL/20    #289=     $288                 397:0               	;0
596  290   BOOL_NOT/13               #290=     #289                 ?0                  	;0
597  290   JMPZ/43                   ?0        #290                 ?601                	;0	>>601
598  291   NOP/0                     ?0        ?0                   ?0                  	;1
599  291   NOP/0                     ?0        ?0                   ?0                  	;1
600  291   GOTO/253                  ?0        ?603                 ?398                	;0
601  293   ASSIGN_DIM/147            ?259      16?3                 399:'pid'           	;0	<<597
602  293   OP_DATA/137               ?0        400:NULL             ?0                  	;0
603  295   INIT_FCALL_BY_NAME/59     ?0        ?0                   401:'C73Ed8d0B70ce12f'	;2
604  295   SEND_VAL_EX/116           ?80       403:'streams_servers' ?1                  	;0
605  295   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
606  295   DO_FCALL_BY_NAME/131      $292=     ?0                   ?0                  	;0
607  295   ASSIGN/38                 ?261      16?3                 $292                	;0
608  296   NOP/0                     ?0        ?0                   ?0                  	;1
609  296   NOP/0                     ?0        ?0                   ?0                  	;1
610  296   GOTO/253                  ?0        ?631                 ?404                	;0
611  298   FETCH_DIM_R/81            $294=     16?3                 405:'parent_id'     	;0
612  298   BOOL_NOT/13               #295=     $294                 ?0                  	;0
613  298   JMPNZ_EX/47               #295=     #295                 ?617                	;0	>>617
614  298   FETCH_DIM_R/81            $296=     16?3                 406:'parent_id'     	;0
615  298   IS_EQUAL/17               #297=     $296                 407:0               	;0
616  298   BOOL/52                   #295=     #297                 ?0                  	;0
617  298   BOOL_NOT/13               #298=     #295                 ?0                  	;0	<<613
618  298   JMPZ/43                   ?0        #298                 ?622                	;0	>>622
619  299   NOP/0                     ?0        ?0                   ?0                  	;1
620  299   NOP/0                     ?0        ?0                   ?0                  	;1
621  299   GOTO/253                  ?0        ?624                 ?408                	;0
622  301   ASSIGN_DIM/147            ?267      16?3                 409:'parent_id'     	;0	<<618
623  301   OP_DATA/137               ?0        410:NULL             ?0                  	;0
624  303   ASSIGN_DIM/147            ?268      16?3                 411:'stream_status' 	;0
625  303   OP_DATA/137               ?0        412:0                ?0                  	;0
626  304   ASSIGN_DIM/147            ?269      16?3                 413:'stream_started'	;0
627  304   OP_DATA/137               ?0        414:NULL             ?0                  	;0
628  305   NOP/0                     ?0        ?0                   ?0                  	;1
629  305   NOP/0                     ?0        ?0                   ?0                  	;1
630  305   GOTO/253                  ?0        ?592                 ?415                	;0
631  307   INIT_FCALL_BY_NAME/59     ?0        ?0                   416:'C483A3a59265139E'	;1
632  307   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
633  307   DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
634  307   ASSIGN/38                 ?271      16?4                 $302                	;0
635  308   FETCH_DIM_R/81            $304=     16?4                 418:'columns'       	;0
636  308   CONCAT/8                  #305=     419:'INSERT INTO `streams_servers`(' $304                	;0
637  308   CONCAT/8                  #306=     #305                 420:') VALUES('     	;0
638  308   FETCH_DIM_R/81            $307=     16?4                 421:'placeholder'   	;0
639  308   CONCAT/8                  #308=     #306                 $307                	;0
640  308   CONCAT/8                  #309=     #308                 422:');'            	;0
641  308   ASSIGN/38                 ?278      16?5                 #309                	;0
642  309   INIT_METHOD_CALL/112      ?0        16?6                 423:'query'         	;1
643  309   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
644  309   FETCH_DIM_R/81            $311=     16?4                 425:'data'          	;0
645  309   SEND_UNPACK/165           ?80       $311                 ?1                  	;0
646  309   DO_FCALL/60               ?280      ?0                   ?0                  	;0
647  311   NOP/0                     ?0        ?0                   ?0                  	;1
648  311   NOP/0                     ?0        ?0                   ?0                  	;1
649  311   GOTO/253                  ?0        ?650                 ?426                	;0
650  312   JMP/42                    ?0        ?588                 ?0                  	;0	>>588
651  312   FE_FREE/127               ?0        $286                 ?0                  	;0	<<587
652  315   JMP/42                    ?0        ?657                 ?0                  	;0	>>657
653  316   CATCH/107                 ?1        427:'Exception'      16?7                	;0 CB	>>657,571
654  317   CONCAT/8                  #313=     429:'Error: '        16?7                	;0
655  317   CONCAT/8                  #314=     #313                 430:'
'             	;0
656  317   ECHO/40                   ?0        #314                 ?0                  	;0
657  319   JMP/42                    ?0        ?570                 ?0                  	;0	>>570	<<652,653
658  319   FE_FREE/127               ?0        $277                 ?0                  	;0	<<569
659  323   GOTO/253                  ?0        ?1378                ?431                	;0
660  325   FE_RESET_R/77             $315=     16?8                 ?759                	;0
661  325   FE_FETCH_R/78             ?0        $315                 16?9                	;759	>>759	<<758
662  327   INIT_METHOD_CALL/112      ?0        16?0                 432:'query'         	;1	<<754
663  327   CONCAT/8                  #316=     434:'SELECT * FROM `streams` LIMIT ' 16?9                	;0
664  327   CONCAT/8                  #317=     #316                 435:', 1000;'       	;0
665  327   SEND_VAL_EX/116           ?80       #317                 ?1                  	;0
666  327   DO_FCALL/60               ?286      ?0                   ?0                  	;0
667  328   INIT_METHOD_CALL/112      ?0        16?0                 436:'get_rows'      	;0
668  328   DO_FCALL/60               $319=     ?0                   ?0                  	;0
669  328   ASSIGN/38                 ?288      16?2                 $319                	;0
670  329   FE_RESET_R/77             $321=     16?2                 ?752                	;0
671  329   FE_FETCH_R/78             ?0        $321                 16?3                	;752	>>752	<<751
672  331   NOP/0                     ?0        ?0                   ?0                  	;1	<<747
673  331   NOP/0                     ?0        ?0                   ?0                  	;1
674  331   GOTO/253                  ?0        ?699                 ?438                	;0
675  333   FETCH_DIM_R/81            $323=     16?3                 440:'movie_propeties'	;0
676  333   ASSIGN_DIM/147            ?290      16?3                 439:'movie_properties'	;0
677  333   OP_DATA/137               ?0        $323                 ?0                  	;0
678  334   FETCH_DIM_R/81            $324=     16?3                 441:'target_container'	;0
679  334   BOOL_NOT/13               #325=     $324                 ?0                  	;0
680  334   JMPZ/43                   ?0        #325                 ?684                	;0	>>684
681  335   NOP/0                     ?0        ?0                   ?0                  	;1
682  335   NOP/0                     ?0        ?0                   ?0                  	;1
683  335   GOTO/253                  ?0        ?692                 ?442                	;0
684  337   INIT_FCALL_BY_NAME/59     ?0        ?0                   444:'json_decode'   	;2	<<680
685  337   FETCH_DIM_FUNC_ARG/93     $327=     16?3                 446:'target_container'	;1
686  337   SEND_VAR_EX/66            ?80       $327                 ?1                  	;0
687  337   SEND_VAL_EX/116           ?96       447:true             ?2                  	;0
688  337   DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
689  337   FETCH_DIM_R/81            $329=     $328                 448:0               	;0
690  337   ASSIGN_DIM/147            ?294      16?3                 443:'target_container'	;0
691  337   OP_DATA/137               ?0        $329                 ?0                  	;0
692  339   FETCH_DIM_R/81            $330=     16?3                 449:'id'            	;0
693  339   FETCH_DIM_R/81            $332=     16?3                 450:'cchannel_rsources'	;0
694  339   ASSIGN_DIM/147            ?299      16?15                $330                	;0
695  339   OP_DATA/137               ?0        $332                 ?0                  	;0
696  340   NOP/0                     ?0        ?0                   ?0                  	;1
697  340   NOP/0                     ?0        ?0                   ?0                  	;1
698  340   GOTO/253                  ?0        ?722                 ?451                	;0
699  342   INIT_FCALL_BY_NAME/59     ?0        ?0                   452:'json_decode'   	;2
700  342   FETCH_DIM_FUNC_ARG/93     $333=     16?3                 454:'external_push' 	;1
701  342   SEND_VAR_EX/66            ?80       $333                 ?1                  	;0
702  342   SEND_VAL_EX/116           ?96       455:true             ?2                  	;0
703  342   DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
704  342   ASSIGN/38                 ?303      16?16                $334                	;0
705  343   JMPZ/43                   ?0        16?16                ?709                	;0	>>709
706  344   NOP/0                     ?0        ?0                   ?0                  	;1
707  344   NOP/0                     ?0        ?0                   ?0                  	;1
708  344   GOTO/253                  ?0        ?711                 ?456                	;0
709  346   ASSIGN_DIM/147            ?304      16?3                 457:'external_push' 	;0	<<705
710  346   OP_DATA/137               ?0        458:'{}'             ?0                  	;0
711  348   INIT_FCALL_BY_NAME/59     ?0        ?0                   460:'intval'        	;1
712  348   FETCH_DIM_FUNC_ARG/93     $338=     16?3                 462:'category_id'   	;1
713  348   SEND_VAR_EX/66            ?80       $338                 ?1                  	;0
714  348   DO_FCALL_BY_NAME/131      $339=     ?0                   ?0                  	;0
715  348   CONCAT/8                  #340=     463:'['              $339                	;0
716  348   CONCAT/8                  #341=     #340                 464:']'             	;0
717  348   ASSIGN_DIM/147            ?305      16?3                 459:'category_id'   	;0
718  348   OP_DATA/137               ?0        #341                 ?0                  	;0
719  349   NOP/0                     ?0        ?0                   ?0                  	;1
720  349   NOP/0                     ?0        ?0                   ?0                  	;1
721  349   GOTO/253                  ?0        ?675                 ?465                	;0
722  351   INIT_FCALL_BY_NAME/59     ?0        ?0                   466:'c73eD8d0B70ce12F'	;2
723  351   SEND_VAL_EX/116           ?80       468:'streams'        ?1                  	;0
724  351   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
725  351   DO_FCALL_BY_NAME/131      $342=     ?0                   ?0                  	;0
726  351   ASSIGN/38                 ?311      16?3                 $342                	;0
727  352   INIT_FCALL_BY_NAME/59     ?0        ?0                   469:'C483a3a59265139e'	;1
728  352   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
729  352   DO_FCALL_BY_NAME/131      $344=     ?0                   ?0                  	;0
730  352   ASSIGN/38                 ?313      16?4                 $344                	;0
731  353   FETCH_DIM_R/81            $346=     16?4                 471:'columns'       	;0
732  353   CONCAT/8                  #347=     472:'INSERT INTO `streams`(' $346                	;0
733  353   CONCAT/8                  #348=     #347                 473:') VALUES('     	;0
734  353   FETCH_DIM_R/81            $349=     16?4                 474:'placeholder'   	;0
735  353   CONCAT/8                  #350=     #348                 $349                	;0
736  353   CONCAT/8                  #351=     #350                 475:');'            	;0
737  353   ASSIGN/38                 ?320      16?5                 #351                	;0
738  354   INIT_METHOD_CALL/112      ?0        16?6                 476:'query'         	;1
739  354   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
740  354   FETCH_DIM_R/81            $353=     16?4                 478:'data'          	;0
741  354   SEND_UNPACK/165           ?80       $353                 ?1                  	;0
742  354   DO_FCALL/60               ?322      ?0                   ?0                  	;0
743  355   NOP/0                     ?0        ?0                   ?0                  	;1
744  355   NOP/0                     ?0        ?0                   ?0                  	;1
745  355   GOTO/253                  ?0        ?746                 ?479                	;0
746  356   JMP/42                    ?0        ?751                 ?0                  	;0	>>751
747  357   CATCH/107                 ?1        480:'Exception'      16?7                	;0 CB	>>751,672
748  358   CONCAT/8                  #355=     482:'Error: '        16?7                	;0
749  358   CONCAT/8                  #356=     #355                 483:'
'             	;0
750  358   ECHO/40                   ?0        #356                 ?0                  	;0
751  360   JMP/42                    ?0        ?671                 ?0                  	;0	>>671	<<746,747
752  360   FE_FREE/127               ?0        $321                 ?0                  	;0	<<670
753  362   JMP/42                    ?0        ?758                 ?0                  	;0	>>758
754  363   CATCH/107                 ?1        484:'Exception'      16?7                	;0 CB	>>758,662
755  364   CONCAT/8                  #357=     486:'Error: '        16?7                	;0
756  364   CONCAT/8                  #358=     #357                 487:'
'             	;0
757  364   ECHO/40                   ?0        #358                 ?0                  	;0
758  366   JMP/42                    ?0        ?661                 ?0                  	;0	>>661	<<753,754
759  366   FE_FREE/127               ?0        $315                 ?0                  	;0	<<660
760  371   INIT_FCALL_BY_NAME/59     ?0        ?0                   488:'in_array'      	;2
761  371   SEND_VAL_EX/116           ?80       490:'streams_options' ?1                  	;0
762  371   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
763  371   DO_FCALL_BY_NAME/131      $359=     ?0                   ?0                  	;0
764  371   BOOL_NOT/13               #360=     $359                 ?0                  	;0
765  371   JMPZ/43                   ?0        #360                 ?767                	;0	>>767
766  372   GOTO/253                  ?0        ?2055                ?491                	;0
767  374   GOTO/253                  ?0        ?1239                ?492                	;0	<<765
768  376   NOP/0                     ?0        ?0                   ?0                  	;0
769  377   INIT_METHOD_CALL/112      ?0        16?0                 493:'query'         	;1	<<783
770  377   SEND_VAL_EX/116           ?80       495:'SELECT * FROM `settings` LIMIT 1;' ?1                  	;0
771  377   DO_FCALL/60               ?329      ?0                   ?0                  	;0
772  378   INIT_METHOD_CALL/112      ?0        16?0                 496:'get_row'       	;0
773  378   DO_FCALL/60               $362=     ?0                   ?0                  	;0
774  378   ASSIGN/38                 ?331      16?17                $362                	;0
775  379   INIT_METHOD_CALL/112      ?0        16?6                 498:'query'         	;3
776  379   SEND_VAL_EX/116           ?80       500:'UPDATE `settings` SET `server_name` = ?, `default_timezone` = ?;' ?1                  	;0
777  379   FETCH_DIM_FUNC_ARG/93     $364=     16?17                501:'server_name'   	;2
778  379   SEND_VAR_EX/66            ?96       $364                 ?2                  	;0
779  379   FETCH_DIM_FUNC_ARG/93     $365=     16?17                502:'default_timezone'	;3
780  379   SEND_VAR_EX/66            ?112      $365                 ?3                  	;0
781  379   DO_FCALL/60               ?334      ?0                   ?0                  	;0
782  379   JMP/42                    ?0        ?787                 ?0                  	;0	>>787
783  380   CATCH/107                 ?1        503:'Exception'      16?7                	;0 CB	>>787,769
784  381   CONCAT/8                  #367=     505:'Error: '        16?7                	;0
785  381   CONCAT/8                  #368=     #367                 506:'
'             	;0
786  381   ECHO/40                   ?0        #368                 ?0                  	;0
787  384   INIT_METHOD_CALL/112      ?0        16?0                 507:'query'         	;1	<<782,783,833
788  384   SEND_VAL_EX/116           ?80       509:'SHOW TABLES LIKE \'admin_settings\';' ?1                  	;0
789  384   DO_FCALL/60               ?337      ?0                   ?0                  	;0
790  385   INIT_METHOD_CALL/112      ?0        16?0                 510:'num_rows'      	;0
791  385   DO_FCALL/60               $370=     ?0                   ?0                  	;0
792  385   IS_SMALLER/19             #371=     512:0                $370                	;0
793  385   BOOL_NOT/13               #372=     #371                 ?0                  	;0
794  385   JMPZ/43                   ?0        #372                 ?796                	;0	>>796
795  386   GOTO/253                  ?0        ?832                 ?513                	;0
796  388   ASSIGN/38                 ?341      16?18                514:array (
)       	;0	<<794
797  389   INIT_METHOD_CALL/112      ?0        16?0                 515:'query'         	;1
798  389   SEND_VAL_EX/116           ?80       517:'SELECT * FROM `admin_settings`;' ?1                  	;0
799  389   DO_FCALL/60               ?342      ?0                   ?0                  	;0
800  390   INIT_METHOD_CALL/112      ?0        16?0                 518:'get_rows'      	;0
801  390   DO_FCALL/60               $375=     ?0                   ?0                  	;0
802  390   FE_RESET_R/77             $376=     $375                 ?809                	;0
803  390   FE_FETCH_R/78             ?0        $376                 16?19               	;809	>>809	<<808
804  391   FETCH_DIM_R/81            $377=     16?19                520:'type'          	;0
805  391   FETCH_DIM_R/81            $379=     16?19                521:'value'         	;0
806  391   ASSIGN_DIM/147            ?346      16?18                $377                	;0
807  391   OP_DATA/137               ?0        $379                 ?0                  	;0
808  392   JMP/42                    ?0        ?803                 ?0                  	;0	>>803
809  392   FE_FREE/127               ?0        $376                 ?0                  	;0	<<802
810  395   INIT_FCALL_BY_NAME/59     ?0        ?0                   522:'strlen'        	;1
811  395   FETCH_DIM_FUNC_ARG/93     $380=     16?18                524:'recaptcha_v2_secret_key'	;1
812  395   SEND_VAR_EX/66            ?80       $380                 ?1                  	;0
813  395   DO_FCALL_BY_NAME/131      $381=     ?0                   ?0                  	;0
814  395   IS_SMALLER/19             #382=     525:0                $381                	;0
815  395   JMPZ_EX/46                #382=     #382                 ?822                	;0	>>822
816  395   INIT_FCALL_BY_NAME/59     ?0        ?0                   526:'strlen'        	;1
817  395   FETCH_DIM_FUNC_ARG/93     $383=     16?18                528:'recaptcha_v2_site_key'	;1
818  395   SEND_VAR_EX/66            ?80       $383                 ?1                  	;0
819  395   DO_FCALL_BY_NAME/131      $384=     ?0                   ?0                  	;0
820  395   IS_SMALLER/19             #385=     529:0                $384                	;0
821  395   BOOL/52                   #382=     #385                 ?0                  	;0
822  395   BOOL_NOT/13               #386=     #382                 ?0                  	;0	<<815
823  395   JMPZ/43                   ?0        #386                 ?825                	;0	>>825
824  396   GOTO/253                  ?0        ?832                 ?530                	;0
825  398   INIT_METHOD_CALL/112      ?0        16?6                 531:'query'         	;3	<<823
826  398   SEND_VAL_EX/116           ?80       533:'UPDATE `settings` SET `recaptcha_v2_secret_key` = ?, `recaptcha_v2_site_key` = ?;' ?1                  	;0
827  398   FETCH_DIM_FUNC_ARG/93     $387=     16?18                534:'recaptcha_v2_secret_key'	;2
828  398   SEND_VAR_EX/66            ?96       $387                 ?2                  	;0
829  398   FETCH_DIM_FUNC_ARG/93     $388=     16?18                535:'recaptcha_v2_site_key'	;3
830  398   SEND_VAR_EX/66            ?112      $388                 ?3                  	;0
831  398   DO_FCALL/60               ?357      ?0                   ?0                  	;0
832  400   JMP/42                    ?0        ?837                 ?0                  	;0	>>837
833  401   CATCH/107                 ?1        536:'Exception'      16?7                	;0 CB	>>837,787
834  402   CONCAT/8                  #390=     538:'Error: '        16?7                	;0
835  402   CONCAT/8                  #391=     #390                 539:'
'             	;0
836  402   ECHO/40                   ?0        #391                 ?0                  	;0
837  404   GOTO/253                  ?0        ?3078                ?540                	;0	<<832,833
838  406   JMPZ/43                   ?0        16?8                 ?840                	;0	>>840
839  407   GOTO/253                  ?0        ?841                 ?541                	;0
840  409   ASSIGN/38                 ?360      16?8                 542:array (
  0 => 0,
)	;0	<<838
841  411   FE_RESET_R/77             $393=     16?8                 ?882                	;0
842  411   FE_FETCH_R/78             ?0        $393                 16?9                	;882	>>882	<<881
843  413   INIT_METHOD_CALL/112      ?0        16?0                 543:'query'         	;1	<<877
844  413   CONCAT/8                  #394=     545:'SELECT * FROM `reg_users` LIMIT ' 16?9                	;0
845  413   CONCAT/8                  #395=     #394                 546:', 1000;'       	;0
846  413   SEND_VAL_EX/116           ?80       #395                 ?1                  	;0
847  413   DO_FCALL/60               ?364      ?0                   ?0                  	;0
848  414   INIT_METHOD_CALL/112      ?0        16?0                 547:'get_rows'      	;0
849  414   DO_FCALL/60               $397=     ?0                   ?0                  	;0
850  414   ASSIGN/38                 ?366      16?2                 $397                	;0
851  415   FE_RESET_R/77             $399=     16?2                 ?875                	;0
852  415   FE_FETCH_R/78             ?0        $399                 16?3                	;875	>>875	<<874
853  416   INIT_FCALL_BY_NAME/59     ?0        ?0                   549:'C73Ed8D0b70cE12F'	;2
854  416   SEND_VAL_EX/116           ?80       551:'users'          ?1                  	;0
855  416   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
856  416   DO_FCALL_BY_NAME/131      $400=     ?0                   ?0                  	;0
857  416   ASSIGN/38                 ?369      16?3                 $400                	;0
858  417   INIT_FCALL_BY_NAME/59     ?0        ?0                   552:'c483A3a59265139e'	;1
859  417   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
860  417   DO_FCALL_BY_NAME/131      $402=     ?0                   ?0                  	;0
861  417   ASSIGN/38                 ?371      16?4                 $402                	;0
862  418   FETCH_DIM_R/81            $404=     16?4                 554:'columns'       	;0
863  418   CONCAT/8                  #405=     555:'INSERT INTO `users`(' $404                	;0
864  418   CONCAT/8                  #406=     #405                 556:') VALUES('     	;0
865  418   FETCH_DIM_R/81            $407=     16?4                 557:'placeholder'   	;0
866  418   CONCAT/8                  #408=     #406                 $407                	;0
867  418   CONCAT/8                  #409=     #408                 558:');'            	;0
868  418   ASSIGN/38                 ?378      16?5                 #409                	;0
869  419   INIT_METHOD_CALL/112      ?0        16?6                 559:'query'         	;1
870  419   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
871  419   FETCH_DIM_R/81            $411=     16?4                 561:'data'          	;0
872  419   SEND_UNPACK/165           ?80       $411                 ?1                  	;0
873  419   DO_FCALL/60               ?380      ?0                   ?0                  	;0
874  420   JMP/42                    ?0        ?852                 ?0                  	;0	>>852
875  420   FE_FREE/127               ?0        $399                 ?0                  	;0	<<851
876  422   JMP/42                    ?0        ?881                 ?0                  	;0	>>881
877  423   CATCH/107                 ?1        562:'Exception'      16?7                	;0 CB	>>881,843
878  424   CONCAT/8                  #413=     564:'Error: '        16?7                	;0
879  424   CONCAT/8                  #414=     #413                 565:'
'             	;0
880  424   ECHO/40                   ?0        #414                 ?0                  	;0
881  426   JMP/42                    ?0        ?842                 ?0                  	;0	>>842	<<876,877
882  426   FE_FREE/127               ?0        $393                 ?0                  	;0	<<841
883  429   GOTO/253                  ?0        ?1936                ?566                	;0
884  431   INIT_METHOD_CALL/112      ?0        16?6                 567:'query'         	;1
885  431   SEND_VAL_EX/116           ?80       569:'TRUNCATE `enigma2_devices`;' ?1                  	;0
886  431   DO_FCALL/60               ?383      ?0                   ?0                  	;0
887  432   INIT_FCALL_BY_NAME/59     ?0        ?0                   570:'number_format' 	;2
888  432   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
889  432   SEND_VAL_EX/116           ?96       572:0                ?2                  	;0
890  432   DO_FCALL_BY_NAME/131      $416=     ?0                   ?0                  	;0
891  432   CONCAT/8                  #417=     573:'Authorising '   $416                	;0
892  432   CONCAT/8                  #418=     #417                 574:' enigma devices.
'	;0
893  432   ECHO/40                   ?0        #418                 ?0                  	;0
894  433   INIT_FCALL_BY_NAME/59     ?0        ?0                   575:'range'         	;3
895  433   SEND_VAL_EX/116           ?80       577:0                ?1                  	;0
896  433   SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
897  433   SEND_VAL_EX/116           ?112      578:1000             ?3                  	;0
898  433   DO_FCALL_BY_NAME/131      $419=     ?0                   ?0                  	;0
899  433   ASSIGN/38                 ?388      16?8                 $419                	;0
900  434   JMPZ/43                   ?0        16?8                 ?902                	;0	>>902
901  435   GOTO/253                  ?0        ?1989                ?579                	;0
902  437   ASSIGN/38                 ?389      16?8                 580:array (
  0 => 0,
)	;0	<<900
903  438   GOTO/253                  ?0        ?1989                ?581                	;0
904  440   INIT_METHOD_CALL/112      ?0        16?6                 582:'query'         	;1
905  440   SEND_VAL_EX/116           ?80       584:'TRUNCATE `bouquets`;' ?1                  	;0
906  440   DO_FCALL/60               ?390      ?0                   ?0                  	;0
907  441   INIT_FCALL_BY_NAME/59     ?0        ?0                   585:'number_format' 	;2
908  441   INIT_FCALL_BY_NAME/59     ?0        ?0                   587:'count'         	;1
909  441   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
910  441   DO_FCALL_BY_NAME/131      $423=     ?0                   ?0                  	;0
911  441   SEND_VAR_NO_REF_EX/50     ?80       $423                 ?1                  	;0
912  441   SEND_VAL_EX/116           ?96       589:0                ?2                  	;0
913  441   DO_FCALL_BY_NAME/131      $424=     ?0                   ?0                  	;0
914  441   CONCAT/8                  #425=     590:'Creating '      $424                	;0
915  441   CONCAT/8                  #426=     #425                 591:' bouquets.
'   	;0
916  441   ECHO/40                   ?0        #426                 ?0                  	;0
917  442   FE_RESET_R/77             $427=     16?2                 ?1040               	;0
918  442   FE_FETCH_R/78             ?0        $427                 16?3                	;1040	>>1040	<<1039
919  444   NOP/0                     ?0        ?0                   ?0                  	;1	<<1035
920  444   GOTO/253                  ?0        ?983                 ?592                	;0
921  446   INIT_FCALL_BY_NAME/59     ?0        ?0                   593:'C73Ed8D0b70ce12F'	;2
922  446   SEND_VAL_EX/116           ?80       595:'bouquets'       ?1                  	;0
923  446   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
924  446   DO_FCALL_BY_NAME/131      $428=     ?0                   ?0                  	;0
925  446   ASSIGN/38                 ?397      16?3                 $428                	;0
926  447   INIT_FCALL_BY_NAME/59     ?0        ?0                   596:'C483A3A59265139e'	;1
927  447   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
928  447   DO_FCALL_BY_NAME/131      $430=     ?0                   ?0                  	;0
929  447   ASSIGN/38                 ?399      16?4                 $430                	;0
930  448   FETCH_DIM_R/81            $432=     16?4                 598:'columns'       	;0
931  448   CONCAT/8                  #433=     599:'INSERT INTO `bouquets`(' $432                	;0
932  448   CONCAT/8                  #434=     #433                 600:') VALUES('     	;0
933  448   FETCH_DIM_R/81            $435=     16?4                 601:'placeholder'   	;0
934  448   CONCAT/8                  #436=     #434                 $435                	;0
935  448   CONCAT/8                  #437=     #436                 602:');'            	;0
936  448   ASSIGN/38                 ?406      16?5                 #437                	;0
937  449   INIT_METHOD_CALL/112      ?0        16?6                 603:'query'         	;1
938  449   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
939  449   FETCH_DIM_R/81            $439=     16?4                 605:'data'          	;0
940  449   SEND_UNPACK/165           ?80       $439                 ?1                  	;0
941  449   DO_FCALL/60               ?408      ?0                   ?0                  	;0
942  450   NOP/0                     ?0        ?0                   ?0                  	;1
943  450   GOTO/253                  ?0        ?1034                ?606                	;0
944  452   ASSIGN_DIM/147            ?409      16?3                 607:'bouquet_series'	;0
945  452   OP_DATA/137               ?0        608:array (
)        ?0                  	;0
946  453   FE_RESET_R/77             $442=     16?20                ?967                	;0
947  453   FE_FETCH_R/78             ?0        $442                 16?21               	;967	>>967	<<966
948  454   INIT_FCALL_BY_NAME/59     ?0        ?0                   609:'in_array'      	;2
949  454   INIT_FCALL_BY_NAME/59     ?0        ?0                   611:'intval'        	;1
950  454   SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
951  454   DO_FCALL_BY_NAME/131      $443=     ?0                   ?0                  	;0
952  454   SEND_VAR_NO_REF_EX/50     ?80       $443                 ?1                  	;0
953  454   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
954  454   DO_FCALL_BY_NAME/131      $444=     ?0                   ?0                  	;0
955  454   BOOL_NOT/13               #445=     $444                 ?0                  	;0
956  454   JMPZ/43                   ?0        #445                 ?960                	;0	>>960
957  455   NOP/0                     ?0        ?0                   ?0                  	;1
958  455   NOP/0                     ?0        ?0                   ?0                  	;1
959  455   GOTO/253                  ?0        ?966                 ?613                	;0
960  457   INIT_FCALL_BY_NAME/59     ?0        ?0                   615:'intval'        	;1	<<956
961  457   SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
962  457   DO_FCALL_BY_NAME/131      $448=     ?0                   ?0                  	;0
963  457   FETCH_DIM_W/84            $446=     16?3                 614:'bouquet_series'	;0
964  457   ASSIGN_DIM/147            ?415      $446                 ?4397406            	;0
965  457   OP_DATA/137               ?0        $448                 ?0                  	;0
966  459   JMP/42                    ?0        ?947                 ?0                  	;0	>>947
967  459   FE_FREE/127               ?0        $442                 ?0                  	;0	<<946
968  462   FE_RESET_R/77             $449=     617:array (
  0 => 'channels',
  1 => 'movies',
  2 => 'radios',
  3 => 'series',
) ?980                	;0
969  462   FE_FETCH_R/78             ?0        $449                 16?22               	;980	>>980	<<979
970  463   CONCAT/8                  #450=     618:'bouquet_'       16?22               	;0
971  463   FETCH_DIM_R/81            $451=     16?3                 #450                	;0
972  463   JMPZ/43                   ?0        $451                 ?976                	;0	>>976
973  464   NOP/0                     ?0        ?0                   ?0                  	;1
974  464   NOP/0                     ?0        ?0                   ?0                  	;1
975  464   GOTO/253                  ?0        ?979                 ?619                	;0
976  466   CONCAT/8                  #452=     620:'bouquet_'       16?22               	;0	<<972
977  466   ASSIGN_DIM/147            ?421      16?3                 #452                	;0
978  466   OP_DATA/137               ?0        621:'[]'             ?0                  	;0
979  468   JMP/42                    ?0        ?969                 ?0                  	;0	>>969
980  468   FE_FREE/127               ?0        $449                 ?0                  	;0	<<968
981  471   NOP/0                     ?0        ?0                   ?0                  	;1
982  471   GOTO/253                  ?0        ?921                 ?622                	;0
983  473   INIT_FCALL_BY_NAME/59     ?0        ?0                   623:'json_decode'   	;2
984  473   FETCH_DIM_FUNC_ARG/93     $454=     16?3                 625:'bouquet_channels'	;1
985  473   SEND_VAR_EX/66            ?80       $454                 ?1                  	;0
986  473   SEND_VAL_EX/116           ?96       626:true             ?2                  	;0
987  473   DO_FCALL_BY_NAME/131      $455=     ?0                   ?0                  	;0
988  473   ASSIGN/38                 ?424      16?23                $455                	;0
989  474   ASSIGN_DIM/147            $459=     16?3                 629:'bouquet_radios'	;0
990  474   OP_DATA/137               ?0        630:array (
)        ?0                  	;0
991  474   ASSIGN_DIM/147            $458=     16?3                 628:'bouquet_movies'	;0
992  474   OP_DATA/137               ?0        $459                 ?0                  	;0
993  474   ASSIGN_DIM/147            ?425      16?3                 627:'bouquet_channels'	;0
994  474   OP_DATA/137               ?0        $458                 ?0                  	;0
995  475   FE_RESET_R/77             $460=     16?23                ?1025               	;0
996  475   FE_FETCH_R/78             ?0        $460                 16?24               	;1025	>>1025	<<1024
997  476   INIT_FCALL_BY_NAME/59     ?0        ?0                   631:'intval'        	;1
998  476   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
999  476   DO_FCALL_BY_NAME/131      $461=     ?0                   ?0                  	;0
1000 476   ISSET_ISEMPTY_DIM_OBJ/115 #462=     16?13                $461                	;33554432
1001 476   BOOL_NOT/13               #463=     #462                 ?0                  	;0
1002 476   JMPZ/43                   ?0        #463                 ?1006               	;0	>>1006
1003 477   NOP/0                     ?0        ?0                   ?0                  	;1
1004 477   NOP/0                     ?0        ?0                   ?0                  	;1
1005 477   GOTO/253                  ?0        ?1024                ?633                	;0
1006 479   INIT_FCALL_BY_NAME/59     ?0        ?0                   634:'intval'        	;1	<<1002
1007 479   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
1008 479   DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
1009 479   FETCH_DIM_R/81            $465=     16?13                $464                	;0
1010 479   FETCH_DIM_R/81            $466=     636:array (
  1 => 'channels',
  2 => 'movies',
  3 => 'channels',
  4 => 'radio',
) $465                	;0
1011 479   ASSIGN/38                 ?435      16?22                $466                	;0
1012 480   BOOL_NOT/13               #468=     16?22                ?0                  	;0
1013 480   JMPZ/43                   ?0        #468                 ?1017               	;0	>>1017
1014 481   NOP/0                     ?0        ?0                   ?0                  	;1
1015 481   NOP/0                     ?0        ?0                   ?0                  	;1
1016 481   GOTO/253                  ?0        ?1024                ?637                	;0
1017 483   CONCAT/8                  #469=     638:'bouquet_'       16?22               	;0	<<1013
1018 483   INIT_FCALL_BY_NAME/59     ?0        ?0                   639:'intval'        	;1
1019 483   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
1020 483   DO_FCALL_BY_NAME/131      $472=     ?0                   ?0                  	;0
1021 483   FETCH_DIM_W/84            $470=     16?3                 #469                	;0
1022 483   ASSIGN_DIM/147            ?439      $470                 ?4397406            	;0
1023 483   OP_DATA/137               ?0        $472                 ?0                  	;0
1024 486   JMP/42                    ?0        ?996                 ?0                  	;0	>>996
1025 486   FE_FREE/127               ?0        $460                 ?0                  	;0	<<995
1026 489   INIT_FCALL_BY_NAME/59     ?0        ?0                   641:'json_decode'   	;2
1027 489   FETCH_DIM_FUNC_ARG/93     $473=     16?3                 643:'bouquet_series'	;1
1028 489   SEND_VAR_EX/66            ?80       $473                 ?1                  	;0
1029 489   SEND_VAL_EX/116           ?96       644:true             ?2                  	;0
1030 489   DO_FCALL_BY_NAME/131      $474=     ?0                   ?0                  	;0
1031 489   ASSIGN/38                 ?443      16?20                $474                	;0
1032 490   NOP/0                     ?0        ?0                   ?0                  	;1
1033 490   GOTO/253                  ?0        ?944                 ?645                	;0
1034 491   JMP/42                    ?0        ?1039                ?0                  	;0	>>1039
1035 492   CATCH/107                 ?1        646:'Exception'      16?7                	;0 CB	>>1039,919
1036 493   CONCAT/8                  #476=     648:'Error: '        16?7                	;0
1037 493   CONCAT/8                  #477=     #476                 649:'
'             	;0
1038 493   ECHO/40                   ?0        #477                 ?0                  	;0
1039 495   JMP/42                    ?0        ?918                 ?0                  	;0	>>918	<<1034,1035
1040 495   FE_FREE/127               ?0        $427                 ?0                  	;0	<<917
1041 499   GOTO/253                  ?0        ?1598                ?650                	;0
1042 501   INIT_METHOD_CALL/112      ?0        16?6                 651:'query'         	;1
1043 501   SEND_VAL_EX/116           ?80       653:'TRUNCATE `blocked_ips`;' ?1                  	;0
1044 501   DO_FCALL/60               ?446      ?0                   ?0                  	;0
1045 502   INIT_FCALL_BY_NAME/59     ?0        ?0                   654:'number_format' 	;2
1046 502   INIT_FCALL_BY_NAME/59     ?0        ?0                   656:'count'         	;1
1047 502   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1048 502   DO_FCALL_BY_NAME/131      $479=     ?0                   ?0                  	;0
1049 502   SEND_VAR_NO_REF_EX/50     ?80       $479                 ?1                  	;0
1050 502   SEND_VAL_EX/116           ?96       658:0                ?2                  	;0
1051 502   DO_FCALL_BY_NAME/131      $480=     ?0                   ?0                  	;0
1052 502   CONCAT/8                  #481=     659:'Blocking '      $480                	;0
1053 502   CONCAT/8                  #482=     #481                 660:' IP addresses.
'	;0
1054 502   ECHO/40                   ?0        #482                 ?0                  	;0
1055 503   FE_RESET_R/77             $483=     16?2                 ?1084               	;0
1056 503   FE_FETCH_R/78             ?0        $483                 16?3                	;1084	>>1084	<<1083
1057 505   INIT_FCALL_BY_NAME/59     ?0        ?0                   661:'C73eD8D0b70CE12F'	;2	<<1079
1058 505   SEND_VAL_EX/116           ?80       663:'blocked_ips'    ?1                  	;0
1059 505   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1060 505   DO_FCALL_BY_NAME/131      $484=     ?0                   ?0                  	;0
1061 505   ASSIGN/38                 ?453      16?3                 $484                	;0
1062 506   INIT_FCALL_BY_NAME/59     ?0        ?0                   664:'C483A3A59265139e'	;1
1063 506   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1064 506   DO_FCALL_BY_NAME/131      $486=     ?0                   ?0                  	;0
1065 506   ASSIGN/38                 ?455      16?4                 $486                	;0
1066 507   FETCH_DIM_R/81            $488=     16?4                 666:'columns'       	;0
1067 507   CONCAT/8                  #489=     667:'INSERT INTO `blocked_ips`(' $488                	;0
1068 507   CONCAT/8                  #490=     #489                 668:') VALUES('     	;0
1069 507   FETCH_DIM_R/81            $491=     16?4                 669:'placeholder'   	;0
1070 507   CONCAT/8                  #492=     #490                 $491                	;0
1071 507   CONCAT/8                  #493=     #492                 670:');'            	;0
1072 507   ASSIGN/38                 ?462      16?5                 #493                	;0
1073 508   INIT_METHOD_CALL/112      ?0        16?6                 671:'query'         	;1
1074 508   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1075 508   FETCH_DIM_R/81            $495=     16?4                 673:'data'          	;0
1076 508   SEND_UNPACK/165           ?80       $495                 ?1                  	;0
1077 508   DO_FCALL/60               ?464      ?0                   ?0                  	;0
1078 508   JMP/42                    ?0        ?1083                ?0                  	;0	>>1083
1079 509   CATCH/107                 ?1        674:'Exception'      16?7                	;0 CB	>>1083,1057
1080 510   CONCAT/8                  #497=     676:'Error: '        16?7                	;0
1081 510   CONCAT/8                  #498=     #497                 677:'
'             	;0
1082 510   ECHO/40                   ?0        #498                 ?0                  	;0
1083 512   JMP/42                    ?0        ?1056                ?0                  	;0	>>1056	<<1078,1079
1084 512   FE_FREE/127               ?0        $483                 ?0                  	;0	<<1055
1085 516   GOTO/253                  ?0        ?1191                ?678                	;0
1086 518   INIT_METHOD_CALL/112      ?0        16?0                 679:'get_row'       	;0
1087 518   DO_FCALL/60               $499=     ?0                   ?0                  	;0
1088 518   FETCH_DIM_R/81            $500=     $499                 681:'count'         	;0
1089 518   ASSIGN/38                 ?469      16?11                $500                	;0
1090 519   IS_SMALLER/19             #502=     682:0                16?11               	;0
1091 519   BOOL_NOT/13               #503=     #502                 ?0                  	;0
1092 519   JMPZ/43                   ?0        #503                 ?1094               	;0	>>1094
1093 520   GOTO/253                  ?0        ?1936                ?683                	;0
1094 522   INIT_METHOD_CALL/112      ?0        16?6                 684:'query'         	;1	<<1092
1095 522   SEND_VAL_EX/116           ?80       686:'TRUNCATE `users`;' ?1                  	;0
1096 522   DO_FCALL/60               ?472      ?0                   ?0                  	;0
1097 523   INIT_FCALL_BY_NAME/59     ?0        ?0                   687:'number_format' 	;2
1098 523   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
1099 523   SEND_VAL_EX/116           ?96       689:0                ?2                  	;0
1100 523   DO_FCALL_BY_NAME/131      $505=     ?0                   ?0                  	;0
1101 523   CONCAT/8                  #506=     690:'Adding '        $505                	;0
1102 523   CONCAT/8                  #507=     #506                 691:' users.
'      	;0
1103 523   ECHO/40                   ?0        #507                 ?0                  	;0
1104 524   INIT_FCALL_BY_NAME/59     ?0        ?0                   692:'range'         	;3
1105 524   SEND_VAL_EX/116           ?80       694:0                ?1                  	;0
1106 524   SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
1107 524   SEND_VAL_EX/116           ?112      695:1000             ?3                  	;0
1108 524   DO_FCALL_BY_NAME/131      $508=     ?0                   ?0                  	;0
1109 524   ASSIGN/38                 ?477      16?8                 $508                	;0
1110 525   GOTO/253                  ?0        ?838                 ?696                	;0
1111 528   INIT_FCALL_BY_NAME/59     ?0        ?0                   697:'in_array'      	;2
1112 528   SEND_VAL_EX/116           ?80       699:'blocked_isps'   ?1                  	;0
1113 528   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1114 528   DO_FCALL_BY_NAME/131      $510=     ?0                   ?0                  	;0
1115 528   BOOL_NOT/13               #511=     $510                 ?0                  	;0
1116 528   JMPZ/43                   ?0        #511                 ?1118               	;0	>>1118
1117 529   GOTO/253                  ?0        ?1143                ?700                	;0
1118 531   INIT_METHOD_CALL/112      ?0        16?0                 701:'query'         	;1	<<1116
1119 531   SEND_VAL_EX/116           ?80       703:'SELECT * FROM `blocked_isps`;' ?1                  	;0
1120 531   DO_FCALL/60               ?480      ?0                   ?0                  	;0
1121 532   INIT_METHOD_CALL/112      ?0        16?0                 704:'get_rows'      	;0
1122 532   DO_FCALL/60               $513=     ?0                   ?0                  	;0
1123 532   ASSIGN/38                 ?482      16?2                 $513                	;0
1124 533   INIT_FCALL_BY_NAME/59     ?0        ?0                   706:'count'         	;1
1125 533   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1126 533   DO_FCALL_BY_NAME/131      $515=     ?0                   ?0                  	;0
1127 533   IS_SMALLER/19             #516=     708:0                $515                	;0
1128 533   BOOL_NOT/13               #517=     #516                 ?0                  	;0
1129 533   JMPZ/43                   ?0        #517                 ?1131               	;0	>>1131
1130 534   GOTO/253                  ?0        ?2152                ?709                	;0
1131 536   GOTO/253                  ?0        ?2109                ?710                	;0	<<1129
1132 541   INIT_FCALL_BY_NAME/59     ?0        ?0                   711:'in_array'      	;2
1133 541   SEND_VAL_EX/116           ?80       713:'series_episodes' ?1                  	;0
1134 541   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1135 541   DO_FCALL_BY_NAME/131      $518=     ?0                   ?0                  	;0
1136 541   BOOL_NOT/13               #519=     $518                 ?0                  	;0
1137 541   JMPZ/43                   ?0        #519                 ?1139               	;0	>>1139
1138 542   GOTO/253                  ?0        ?59                  ?714                	;0
1139 544   INIT_METHOD_CALL/112      ?0        16?0                 715:'query'         	;1	<<1137
1140 544   SEND_VAL_EX/116           ?80       717:'SELECT COUNT(*) AS `count` FROM `series_episodes`;' ?1                  	;0
1141 544   DO_FCALL/60               ?488      ?0                   ?0                  	;0
1142 545   GOTO/253                  ?0        ?1754                ?718                	;0
1143 548   INIT_FCALL_BY_NAME/59     ?0        ?0                   719:'in_array'      	;2
1144 548   SEND_VAL_EX/116           ?80       721:'bouquets'       ?1                  	;0
1145 548   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1146 548   DO_FCALL_BY_NAME/131      $521=     ?0                   ?0                  	;0
1147 548   BOOL_NOT/13               #522=     $521                 ?0                  	;0
1148 548   JMPZ/43                   ?0        #522                 ?1150               	;0	>>1150
1149 549   GOTO/253                  ?0        ?1598                ?722                	;0
1150 551   INIT_METHOD_CALL/112      ?0        16?0                 723:'query'         	;1	<<1148
1151 551   SEND_VAL_EX/116           ?80       725:'SELECT * FROM `bouquets`;' ?1                  	;0
1152 551   DO_FCALL/60               ?491      ?0                   ?0                  	;0
1153 552   INIT_METHOD_CALL/112      ?0        16?0                 726:'get_rows'      	;0
1154 552   DO_FCALL/60               $524=     ?0                   ?0                  	;0
1155 552   ASSIGN/38                 ?493      16?2                 $524                	;0
1156 553   INIT_FCALL_BY_NAME/59     ?0        ?0                   728:'count'         	;1
1157 553   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1158 553   DO_FCALL_BY_NAME/131      $526=     ?0                   ?0                  	;0
1159 553   IS_SMALLER/19             #527=     730:0                $526                	;0
1160 553   BOOL_NOT/13               #528=     #527                 ?0                  	;0
1161 553   JMPZ/43                   ?0        #528                 ?1163               	;0	>>1163
1162 554   GOTO/253                  ?0        ?1041                ?731                	;0
1163 556   GOTO/253                  ?0        ?904                 ?732                	;0	<<1161
1164 558   INIT_METHOD_CALL/112      ?0        16?0                 733:'query'         	;1
1165 558   SEND_VAL_EX/116           ?80       735:'SELECT * FROM `packages`;' ?1                  	;0
1166 558   DO_FCALL/60               ?497      ?0                   ?0                  	;0
1167 559   INIT_METHOD_CALL/112      ?0        16?0                 736:'get_rows'      	;0
1168 559   DO_FCALL/60               $530=     ?0                   ?0                  	;0
1169 559   ASSIGN/38                 ?499      16?2                 $530                	;0
1170 560   INIT_FCALL_BY_NAME/59     ?0        ?0                   738:'count'         	;1
1171 560   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1172 560   DO_FCALL_BY_NAME/131      $532=     ?0                   ?0                  	;0
1173 560   IS_SMALLER/19             #533=     740:0                $532                	;0
1174 560   BOOL_NOT/13               #534=     #533                 ?0                  	;0
1175 560   JMPZ/43                   ?0        #534                 ?1177               	;0	>>1177
1176 561   GOTO/253                  ?0        ?2689                ?741                	;0
1177 563   INIT_METHOD_CALL/112      ?0        16?6                 742:'query'         	;1	<<1175
1178 563   SEND_VAL_EX/116           ?80       744:'TRUNCATE `users_packages`;' ?1                  	;0
1179 563   DO_FCALL/60               ?503      ?0                   ?0                  	;0
1180 564   INIT_FCALL_BY_NAME/59     ?0        ?0                   745:'number_format' 	;2
1181 564   INIT_FCALL_BY_NAME/59     ?0        ?0                   747:'count'         	;1
1182 564   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1183 564   DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
1184 564   SEND_VAR_NO_REF_EX/50     ?80       $536                 ?1                  	;0
1185 564   SEND_VAL_EX/116           ?96       749:0                ?2                  	;0
1186 564   DO_FCALL_BY_NAME/131      $537=     ?0                   ?0                  	;0
1187 564   CONCAT/8                  #538=     750:'Creating '      $537                	;0
1188 564   CONCAT/8                  #539=     #538                 751:' user packages.
'	;0
1189 564   ECHO/40                   ?0        #539                 ?0                  	;0
1190 565   GOTO/253                  ?0        ?2593                ?752                	;0
1191 568   INIT_FCALL_BY_NAME/59     ?0        ?0                   753:'in_array'      	;2
1192 568   SEND_VAL_EX/116           ?80       755:'blocked_user_agents' ?1                  	;0
1193 568   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1194 568   DO_FCALL_BY_NAME/131      $540=     ?0                   ?0                  	;0
1195 568   BOOL_NOT/13               #541=     $540                 ?0                  	;0
1196 568   JMPZ/43                   ?0        #541                 ?1198               	;0	>>1198
1197 569   GOTO/253                  ?0        ?1850                ?756                	;0
1198 571   INIT_METHOD_CALL/112      ?0        16?0                 757:'query'         	;1	<<1196
1199 571   SEND_VAL_EX/116           ?80       759:'SELECT * FROM `blocked_user_agents`;' ?1                  	;0
1200 571   DO_FCALL/60               ?510      ?0                   ?0                  	;0
1201 572   INIT_METHOD_CALL/112      ?0        16?0                 760:'get_rows'      	;0
1202 572   DO_FCALL/60               $543=     ?0                   ?0                  	;0
1203 572   ASSIGN/38                 ?512      16?2                 $543                	;0
1204 573   INIT_FCALL_BY_NAME/59     ?0        ?0                   762:'count'         	;1
1205 573   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1206 573   DO_FCALL_BY_NAME/131      $545=     ?0                   ?0                  	;0
1207 573   IS_SMALLER/19             #546=     764:0                $545                	;0
1208 573   BOOL_NOT/13               #547=     #546                 ?0                  	;0
1209 573   JMPZ/43                   ?0        #547                 ?1211               	;0	>>1211
1210 574   GOTO/253                  ?0        ?239                 ?765                	;0
1211 576   GOTO/253                  ?0        ?196                 ?766                	;0	<<1209
1212 578   INIT_METHOD_CALL/112      ?0        16?0                 767:'query'         	;1
1213 578   SEND_VAL_EX/116           ?80       769:'SELECT * FROM `groups` WHERE `can_delete` = 1;' ?1                  	;0
1214 578   DO_FCALL/60               ?516      ?0                   ?0                  	;0
1215 579   INIT_METHOD_CALL/112      ?0        16?0                 770:'get_rows'      	;0
1216 579   DO_FCALL/60               $549=     ?0                   ?0                  	;0
1217 579   ASSIGN/38                 ?518      16?2                 $549                	;0
1218 580   INIT_FCALL_BY_NAME/59     ?0        ?0                   772:'count'         	;1
1219 580   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1220 580   DO_FCALL_BY_NAME/131      $551=     ?0                   ?0                  	;0
1221 580   IS_SMALLER/19             #552=     774:0                $551                	;0
1222 580   BOOL_NOT/13               #553=     #552                 ?0                  	;0
1223 580   JMPZ/43                   ?0        #553                 ?1225               	;0	>>1225
1224 581   GOTO/253                  ?0        ?167                 ?775                	;0
1225 583   INIT_METHOD_CALL/112      ?0        16?6                 776:'query'         	;1	<<1223
1226 583   SEND_VAL_EX/116           ?80       778:'DELETE FROM `users_groups` WHERE `can_delete` = 1;' ?1                  	;0
1227 583   DO_FCALL/60               ?522      ?0                   ?0                  	;0
1228 584   INIT_FCALL_BY_NAME/59     ?0        ?0                   779:'number_format' 	;2
1229 584   INIT_FCALL_BY_NAME/59     ?0        ?0                   781:'count'         	;1
1230 584   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1231 584   DO_FCALL_BY_NAME/131      $555=     ?0                   ?0                  	;0
1232 584   SEND_VAR_NO_REF_EX/50     ?80       $555                 ?1                  	;0
1233 584   SEND_VAL_EX/116           ?96       783:0                ?2                  	;0
1234 584   DO_FCALL_BY_NAME/131      $556=     ?0                   ?0                  	;0
1235 584   CONCAT/8                  #557=     784:'Creating '      $556                	;0
1236 584   CONCAT/8                  #558=     #557                 785:' user groups.
'	;0
1237 584   ECHO/40                   ?0        #558                 ?0                  	;0
1238 585   GOTO/253                  ?0        ?124                 ?786                	;0
1239 587   INIT_METHOD_CALL/112      ?0        16?0                 787:'query'         	;1
1240 587   SEND_VAL_EX/116           ?80       789:'SELECT COUNT(*) AS `count` FROM `streams_options`;' ?1                  	;0
1241 587   DO_FCALL/60               ?527      ?0                   ?0                  	;0
1242 588   INIT_METHOD_CALL/112      ?0        16?0                 790:'get_row'       	;0
1243 588   DO_FCALL/60               $560=     ?0                   ?0                  	;0
1244 588   FETCH_DIM_R/81            $561=     $560                 792:'count'         	;0
1245 588   ASSIGN/38                 ?530      16?11                $561                	;0
1246 589   IS_SMALLER/19             #563=     793:0                16?11               	;0
1247 589   BOOL_NOT/13               #564=     #563                 ?0                  	;0
1248 589   JMPZ/43                   ?0        #564                 ?1250               	;0	>>1250
1249 590   GOTO/253                  ?0        ?2055                ?794                	;0
1250 592   INIT_METHOD_CALL/112      ?0        16?6                 795:'query'         	;1	<<1248
1251 592   SEND_VAL_EX/116           ?80       797:'TRUNCATE `streams_options`;' ?1                  	;0
1252 592   DO_FCALL/60               ?533      ?0                   ?0                  	;0
1253 593   INIT_FCALL_BY_NAME/59     ?0        ?0                   798:'number_format' 	;2
1254 593   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
1255 593   SEND_VAL_EX/116           ?96       800:0                ?2                  	;0
1256 593   DO_FCALL_BY_NAME/131      $566=     ?0                   ?0                  	;0
1257 593   CONCAT/8                  #567=     801:'Attributing '   $566                	;0
1258 593   CONCAT/8                  #568=     #567                 802:' options to streams.
'	;0
1259 593   ECHO/40                   ?0        #568                 ?0                  	;0
1260 594   GOTO/253                  ?0        ?2255                ?803                	;0
1261 596   INIT_METHOD_CALL/112      ?0        16?6                 804:'query'         	;1
1262 596   SEND_VAL_EX/116           ?80       806:'TRUNCATE `tickets`;' ?1                  	;0
1263 596   DO_FCALL/60               ?537      ?0                   ?0                  	;0
1264 597   INIT_FCALL_BY_NAME/59     ?0        ?0                   807:'number_format' 	;2
1265 597   INIT_FCALL_BY_NAME/59     ?0        ?0                   809:'count'         	;1
1266 597   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1267 597   DO_FCALL_BY_NAME/131      $570=     ?0                   ?0                  	;0
1268 597   SEND_VAR_NO_REF_EX/50     ?80       $570                 ?1                  	;0
1269 597   SEND_VAL_EX/116           ?96       811:0                ?2                  	;0
1270 597   DO_FCALL_BY_NAME/131      $571=     ?0                   ?0                  	;0
1271 597   CONCAT/8                  #572=     812:'Posting '       $571                	;0
1272 597   CONCAT/8                  #573=     #572                 813:' tickets.
'    	;0
1273 597   ECHO/40                   ?0        #573                 ?0                  	;0
1274 598   FE_RESET_R/77             $574=     16?2                 ?1303               	;0
1275 598   FE_FETCH_R/78             ?0        $574                 16?3                	;1303	>>1303	<<1302
1276 600   INIT_FCALL_BY_NAME/59     ?0        ?0                   814:'C73Ed8D0b70ce12f'	;2	<<1298
1277 600   SEND_VAL_EX/116           ?80       816:'tickets'        ?1                  	;0
1278 600   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1279 600   DO_FCALL_BY_NAME/131      $575=     ?0                   ?0                  	;0
1280 600   ASSIGN/38                 ?544      16?3                 $575                	;0
1281 601   INIT_FCALL_BY_NAME/59     ?0        ?0                   817:'c483a3a59265139e'	;1
1282 601   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1283 601   DO_FCALL_BY_NAME/131      $577=     ?0                   ?0                  	;0
1284 601   ASSIGN/38                 ?546      16?4                 $577                	;0
1285 602   FETCH_DIM_R/81            $579=     16?4                 819:'columns'       	;0
1286 602   CONCAT/8                  #580=     820:'INSERT INTO `tickets`(' $579                	;0
1287 602   CONCAT/8                  #581=     #580                 821:') VALUES('     	;0
1288 602   FETCH_DIM_R/81            $582=     16?4                 822:'placeholder'   	;0
1289 602   CONCAT/8                  #583=     #581                 $582                	;0
1290 602   CONCAT/8                  #584=     #583                 823:');'            	;0
1291 602   ASSIGN/38                 ?553      16?5                 #584                	;0
1292 603   INIT_METHOD_CALL/112      ?0        16?6                 824:'query'         	;1
1293 603   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1294 603   FETCH_DIM_R/81            $586=     16?4                 826:'data'          	;0
1295 603   SEND_UNPACK/165           ?80       $586                 ?1                  	;0
1296 603   DO_FCALL/60               ?555      ?0                   ?0                  	;0
1297 603   JMP/42                    ?0        ?1302                ?0                  	;0	>>1302
1298 604   CATCH/107                 ?1        827:'Exception'      16?7                	;0 CB	>>1302,1276
1299 605   CONCAT/8                  #588=     829:'Error: '        16?7                	;0
1300 605   CONCAT/8                  #589=     #588                 830:'
'             	;0
1301 605   ECHO/40                   ?0        #589                 ?0                  	;0
1302 607   JMP/42                    ?0        ?1275                ?0                  	;0	>>1275	<<1297,1298
1303 607   FE_FREE/127               ?0        $574                 ?0                  	;0	<<1274
1304 611   GOTO/253                  ?0        ?2034                ?831                	;0
1305 613   FE_RESET_R/77             $590=     16?2                 ?1347               	;0
1306 613   FE_FETCH_R/78             ?0        $590                 16?3                	;1347	>>1347	<<1346
1307 615   FETCH_DIM_R/81            $592=     16?3                 833:'reset_stb_data'	;0	<<1342
1308 615   ASSIGN_DIM/147            ?559      16?3                 832:'can_view_vod'  	;0
1309 615   OP_DATA/137               ?0        $592                 ?0                  	;0
1310 616   ASSIGN_DIM/147            ?561      16?3                 834:'allow_restrictions'	;0
1311 616   OP_DATA/137               ?0        835:1                ?0                  	;0
1312 617   ASSIGN_DIM/147            ?562      16?3                 836:'allow_change_username'	;0
1313 617   OP_DATA/137               ?0        837:1                ?0                  	;0
1314 618   ASSIGN_DIM/147            ?563      16?3                 838:'allow_change_password'	;0
1315 618   OP_DATA/137               ?0        839:1                ?0                  	;0
1316 619   ASSIGN_DIM/147            ?564      16?3                 840:'minimum_username_length'	;0
1317 619   OP_DATA/137               ?0        841:8                ?0                  	;0
1318 620   ASSIGN_DIM/147            ?565      16?3                 842:'minimum_password_length'	;0
1319 620   OP_DATA/137               ?0        843:8                ?0                  	;0
1320 621   INIT_FCALL_BY_NAME/59     ?0        ?0                   844:'C73Ed8D0b70ce12f'	;2
1321 621   SEND_VAL_EX/116           ?80       846:'users_groups'   ?1                  	;0
1322 621   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1323 621   DO_FCALL_BY_NAME/131      $598=     ?0                   ?0                  	;0
1324 621   ASSIGN/38                 ?567      16?3                 $598                	;0
1325 622   INIT_FCALL_BY_NAME/59     ?0        ?0                   847:'c483A3A59265139E'	;1
1326 622   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1327 622   DO_FCALL_BY_NAME/131      $600=     ?0                   ?0                  	;0
1328 622   ASSIGN/38                 ?569      16?4                 $600                	;0
1329 623   FETCH_DIM_R/81            $602=     16?4                 849:'columns'       	;0
1330 623   CONCAT/8                  #603=     850:'INSERT INTO `users_groups`(' $602                	;0
1331 623   CONCAT/8                  #604=     #603                 851:') VALUES('     	;0
1332 623   FETCH_DIM_R/81            $605=     16?4                 852:'placeholder'   	;0
1333 623   CONCAT/8                  #606=     #604                 $605                	;0
1334 623   CONCAT/8                  #607=     #606                 853:');'            	;0
1335 623   ASSIGN/38                 ?576      16?5                 #607                	;0
1336 624   INIT_METHOD_CALL/112      ?0        16?6                 854:'query'         	;1
1337 624   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1338 624   FETCH_DIM_R/81            $609=     16?4                 856:'data'          	;0
1339 624   SEND_UNPACK/165           ?80       $609                 ?1                  	;0
1340 624   DO_FCALL/60               ?578      ?0                   ?0                  	;0
1341 624   JMP/42                    ?0        ?1346                ?0                  	;0	>>1346
1342 625   CATCH/107                 ?1        857:'Exception'      16?7                	;0 CB	>>1346,1307
1343 626   CONCAT/8                  #611=     859:'Error: '        16?7                	;0
1344 626   CONCAT/8                  #612=     #611                 860:'
'             	;0
1345 626   ECHO/40                   ?0        #612                 ?0                  	;0
1346 628   JMP/42                    ?0        ?1306                ?0                  	;0	>>1306	<<1341,1342
1347 628   FE_FREE/127               ?0        $590                 ?0                  	;0	<<1305
1348 633   INIT_FCALL_BY_NAME/59     ?0        ?0                   861:'in_array'      	;2
1349 633   SEND_VAL_EX/116           ?80       863:'packages'       ?1                  	;0
1350 633   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1351 633   DO_FCALL_BY_NAME/131      $613=     ?0                   ?0                  	;0
1352 633   BOOL_NOT/13               #614=     $613                 ?0                  	;0
1353 633   JMPZ/43                   ?0        #614                 ?1355               	;0	>>1355
1354 634   GOTO/253                  ?0        ?2689                ?864                	;0
1355 636   GOTO/253                  ?0        ?1164                ?865                	;0	<<1353
1356 638   INIT_FCALL_BY_NAME/59     ?0        ?0                   866:'in_array'      	;2
1357 638   SEND_VAL_EX/116           ?80       868:'mag_devices'    ?1                  	;0
1358 638   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1359 638   DO_FCALL_BY_NAME/131      $615=     ?0                   ?0                  	;0
1360 638   BOOL_NOT/13               #616=     $615                 ?0                  	;0
1361 638   JMPZ/43                   ?0        #616                 ?1363               	;0	>>1363
1362 639   GOTO/253                  ?0        ?2210                ?869                	;0
1363 641   INIT_METHOD_CALL/112      ?0        16?0                 870:'query'         	;1	<<1361
1364 641   SEND_VAL_EX/116           ?80       872:'SELECT COUNT(*) AS `count` FROM `mag_devices`;' ?1                  	;0
1365 641   DO_FCALL/60               ?585      ?0                   ?0                  	;0
1366 642   INIT_METHOD_CALL/112      ?0        16?0                 873:'get_row'       	;0
1367 642   DO_FCALL/60               $618=     ?0                   ?0                  	;0
1368 642   FETCH_DIM_R/81            $619=     $618                 875:'count'         	;0
1369 642   ASSIGN/38                 ?588      16?11                $619                	;0
1370 643   IS_SMALLER/19             #621=     876:0                16?11               	;0
1371 643   BOOL_NOT/13               #622=     #621                 ?0                  	;0
1372 643   JMPZ/43                   ?0        #622                 ?1374               	;0	>>1374
1373 644   GOTO/253                  ?0        ?2210                ?877                	;0
1374 646   INIT_METHOD_CALL/112      ?0        16?6                 878:'query'         	;1	<<1372
1375 646   SEND_VAL_EX/116           ?80       880:'TRUNCATE `mag_devices`;' ?1                  	;0
1376 646   DO_FCALL/60               ?591      ?0                   ?0                  	;0
1377 647   GOTO/253                  ?0        ?2576                ?881                	;0
1378 650   INIT_FCALL_BY_NAME/59     ?0        ?0                   882:'in_array'      	;2
1379 650   SEND_VAL_EX/116           ?80       884:'stream_categories' ?1                  	;0
1380 650   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1381 650   DO_FCALL_BY_NAME/131      $624=     ?0                   ?0                  	;0
1382 650   BOOL_NOT/13               #625=     $624                 ?0                  	;0
1383 650   JMPZ/43                   ?0        #625                 ?1385               	;0	>>1385
1384 651   GOTO/253                  ?0        ?175                 ?885                	;0
1385 653   INIT_METHOD_CALL/112      ?0        16?0                 886:'query'         	;1	<<1383
1386 653   SEND_VAL_EX/116           ?80       888:'SELECT * FROM `stream_categories`;' ?1                  	;0
1387 653   DO_FCALL/60               ?594      ?0                   ?0                  	;0
1388 654   INIT_METHOD_CALL/112      ?0        16?0                 889:'get_rows'      	;0
1389 654   DO_FCALL/60               $627=     ?0                   ?0                  	;0
1390 654   ASSIGN/38                 ?596      16?2                 $627                	;0
1391 655   INIT_FCALL_BY_NAME/59     ?0        ?0                   891:'count'         	;1
1392 655   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1393 655   DO_FCALL_BY_NAME/131      $629=     ?0                   ?0                  	;0
1394 655   IS_SMALLER/19             #630=     893:0                $629                	;0
1395 655   BOOL_NOT/13               #631=     #630                 ?0                  	;0
1396 655   JMPZ/43                   ?0        #631                 ?1398               	;0	>>1398
1397 656   GOTO/253                  ?0        ?1849                ?894                	;0
1398 658   GOTO/253                  ?0        ?1806                ?895                	;0	<<1396
1399 660   INIT_METHOD_CALL/112      ?0        16?0                 896:'query'         	;1
1400 660   SEND_VAL_EX/116           ?80       898:'SELECT * FROM `epg`;' ?1                  	;0
1401 660   DO_FCALL/60               ?600      ?0                   ?0                  	;0
1402 661   INIT_METHOD_CALL/112      ?0        16?0                 899:'get_rows'      	;0
1403 661   DO_FCALL/60               $633=     ?0                   ?0                  	;0
1404 661   ASSIGN/38                 ?602      16?2                 $633                	;0
1405 662   INIT_FCALL_BY_NAME/59     ?0        ?0                   901:'count'         	;1
1406 662   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1407 662   DO_FCALL_BY_NAME/131      $635=     ?0                   ?0                  	;0
1408 662   IS_SMALLER/19             #636=     903:0                $635                	;0
1409 662   BOOL_NOT/13               #637=     #636                 ?0                  	;0
1410 662   JMPZ/43                   ?0        #637                 ?1412               	;0	>>1412
1411 663   GOTO/253                  ?0        ?1456                ?904                	;0
1412 665   INIT_METHOD_CALL/112      ?0        16?6                 905:'query'         	;1	<<1410
1413 665   SEND_VAL_EX/116           ?80       907:'TRUNCATE `epg`;' ?1                  	;0
1414 665   DO_FCALL/60               ?606      ?0                   ?0                  	;0
1415 666   INIT_FCALL_BY_NAME/59     ?0        ?0                   908:'number_format' 	;2
1416 666   INIT_FCALL_BY_NAME/59     ?0        ?0                   910:'count'         	;1
1417 666   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1418 666   DO_FCALL_BY_NAME/131      $639=     ?0                   ?0                  	;0
1419 666   SEND_VAR_NO_REF_EX/50     ?80       $639                 ?1                  	;0
1420 666   SEND_VAL_EX/116           ?96       912:0                ?2                  	;0
1421 666   DO_FCALL_BY_NAME/131      $640=     ?0                   ?0                  	;0
1422 666   CONCAT/8                  #641=     913:'Processing '    $640                	;0
1423 666   CONCAT/8                  #642=     #641                 914:' EPG URLs.
'   	;0
1424 666   ECHO/40                   ?0        #642                 ?0                  	;0
1425 667   GOTO/253                  ?0        ?1426                ?915                	;0
1426 669   FE_RESET_R/77             $643=     16?2                 ?1455               	;0
1427 669   FE_FETCH_R/78             ?0        $643                 16?3                	;1455	>>1455	<<1454
1428 671   INIT_FCALL_BY_NAME/59     ?0        ?0                   916:'C73eD8d0b70Ce12f'	;2	<<1450
1429 671   SEND_VAL_EX/116           ?80       918:'epg'            ?1                  	;0
1430 671   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1431 671   DO_FCALL_BY_NAME/131      $644=     ?0                   ?0                  	;0
1432 671   ASSIGN/38                 ?613      16?3                 $644                	;0
1433 672   INIT_FCALL_BY_NAME/59     ?0        ?0                   919:'C483A3A59265139e'	;1
1434 672   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1435 672   DO_FCALL_BY_NAME/131      $646=     ?0                   ?0                  	;0
1436 672   ASSIGN/38                 ?615      16?4                 $646                	;0
1437 673   FETCH_DIM_R/81            $648=     16?4                 921:'columns'       	;0
1438 673   CONCAT/8                  #649=     922:'INSERT INTO `epg`(' $648                	;0
1439 673   CONCAT/8                  #650=     #649                 923:') VALUES('     	;0
1440 673   FETCH_DIM_R/81            $651=     16?4                 924:'placeholder'   	;0
1441 673   CONCAT/8                  #652=     #650                 $651                	;0
1442 673   CONCAT/8                  #653=     #652                 925:');'            	;0
1443 673   ASSIGN/38                 ?622      16?5                 #653                	;0
1444 674   INIT_METHOD_CALL/112      ?0        16?6                 926:'query'         	;1
1445 674   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1446 674   FETCH_DIM_R/81            $655=     16?4                 928:'data'          	;0
1447 674   SEND_UNPACK/165           ?80       $655                 ?1                  	;0
1448 674   DO_FCALL/60               ?624      ?0                   ?0                  	;0
1449 674   JMP/42                    ?0        ?1454                ?0                  	;0	>>1454
1450 675   CATCH/107                 ?1        929:'Exception'      16?7                	;0 CB	>>1454,1428
1451 676   CONCAT/8                  #657=     931:'Error: '        16?7                	;0
1452 676   CONCAT/8                  #658=     #657                 932:'
'             	;0
1453 676   ECHO/40                   ?0        #658                 ?0                  	;0
1454 678   JMP/42                    ?0        ?1427                ?0                  	;0	>>1427	<<1449,1450
1455 678   FE_FREE/127               ?0        $643                 ?0                  	;0	<<1426
1456 683   INIT_FCALL_BY_NAME/59     ?0        ?0                   933:'in_array'      	;2
1457 683   SEND_VAL_EX/116           ?80       935:'epg_sources'    ?1                  	;0
1458 683   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1459 683   DO_FCALL_BY_NAME/131      $659=     ?0                   ?0                  	;0
1460 683   BOOL_NOT/13               #660=     $659                 ?0                  	;0
1461 683   JMPZ/43                   ?0        #660                 ?1463               	;0	>>1463
1462 684   GOTO/253                  ?0        ?1981                ?936                	;0
1463 686   GOTO/253                  ?0        ?1886                ?937                	;0	<<1461
1464 688   INIT_METHOD_CALL/112      ?0        16?6                 938:'query'         	;1
1465 688   SEND_VAL_EX/116           ?80       940:'TRUNCATE `blocked_isps`;' ?1                  	;0
1466 688   DO_FCALL/60               ?629      ?0                   ?0                  	;0
1467 689   INIT_FCALL_BY_NAME/59     ?0        ?0                   941:'number_format' 	;2
1468 689   INIT_FCALL_BY_NAME/59     ?0        ?0                   943:'count'         	;1
1469 689   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1470 689   DO_FCALL_BY_NAME/131      $662=     ?0                   ?0                  	;0
1471 689   SEND_VAR_NO_REF_EX/50     ?80       $662                 ?1                  	;0
1472 689   SEND_VAL_EX/116           ?96       945:0                ?2                  	;0
1473 689   DO_FCALL_BY_NAME/131      $663=     ?0                   ?0                  	;0
1474 689   CONCAT/8                  #664=     946:'Blocking '      $663                	;0
1475 689   CONCAT/8                  #665=     #664                 947:' ISP\'s.
'     	;0
1476 689   ECHO/40                   ?0        #665                 ?0                  	;0
1477 690   FE_RESET_R/77             $666=     16?2                 ?1506               	;0
1478 690   FE_FETCH_R/78             ?0        $666                 16?3                	;1506	>>1506	<<1505
1479 692   INIT_FCALL_BY_NAME/59     ?0        ?0                   948:'c73ed8d0B70cE12f'	;2	<<1501
1480 692   SEND_VAL_EX/116           ?80       950:'blocked_isps'   ?1                  	;0
1481 692   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1482 692   DO_FCALL_BY_NAME/131      $667=     ?0                   ?0                  	;0
1483 692   ASSIGN/38                 ?636      16?3                 $667                	;0
1484 693   INIT_FCALL_BY_NAME/59     ?0        ?0                   951:'C483a3A59265139e'	;1
1485 693   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1486 693   DO_FCALL_BY_NAME/131      $669=     ?0                   ?0                  	;0
1487 693   ASSIGN/38                 ?638      16?4                 $669                	;0
1488 694   FETCH_DIM_R/81            $671=     16?4                 953:'columns'       	;0
1489 694   CONCAT/8                  #672=     954:'INSERT INTO `blocked_isps`(' $671                	;0
1490 694   CONCAT/8                  #673=     #672                 955:') VALUES('     	;0
1491 694   FETCH_DIM_R/81            $674=     16?4                 956:'placeholder'   	;0
1492 694   CONCAT/8                  #675=     #673                 $674                	;0
1493 694   CONCAT/8                  #676=     #675                 957:');'            	;0
1494 694   ASSIGN/38                 ?645      16?5                 #676                	;0
1495 695   INIT_METHOD_CALL/112      ?0        16?6                 958:'query'         	;1
1496 695   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1497 695   FETCH_DIM_R/81            $678=     16?4                 960:'data'          	;0
1498 695   SEND_UNPACK/165           ?80       $678                 ?1                  	;0
1499 695   DO_FCALL/60               ?647      ?0                   ?0                  	;0
1500 695   JMP/42                    ?0        ?1505                ?0                  	;0	>>1505
1501 696   CATCH/107                 ?1        961:'Exception'      16?7                	;0 CB	>>1505,1479
1502 697   CONCAT/8                  #680=     963:'Error: '        16?7                	;0
1503 697   CONCAT/8                  #681=     #680                 964:'
'             	;0
1504 697   ECHO/40                   ?0        #681                 ?0                  	;0
1505 699   JMP/42                    ?0        ?1478                ?0                  	;0	>>1478	<<1500,1501
1506 699   FE_FREE/127               ?0        $666                 ?0                  	;0	<<1477
1507 703   GOTO/253                  ?0        ?1111                ?965                	;0
1508 706   INIT_FCALL_BY_NAME/59     ?0        ?0                   966:'in_array'      	;2
1509 706   SEND_VAL_EX/116           ?80       968:'tickets'        ?1                  	;0
1510 706   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1511 706   DO_FCALL_BY_NAME/131      $682=     ?0                   ?0                  	;0
1512 706   BOOL_NOT/13               #683=     $682                 ?0                  	;0
1513 706   JMPZ/43                   ?0        #683                 ?1515               	;0	>>1515
1514 707   GOTO/253                  ?0        ?2034                ?969                	;0
1515 709   INIT_METHOD_CALL/112      ?0        16?0                 970:'query'         	;1	<<1513
1516 709   SEND_VAL_EX/116           ?80       972:'SELECT * FROM `tickets`;' ?1                  	;0
1517 709   DO_FCALL/60               ?652      ?0                   ?0                  	;0
1518 710   INIT_METHOD_CALL/112      ?0        16?0                 973:'get_rows'      	;0
1519 710   DO_FCALL/60               $685=     ?0                   ?0                  	;0
1520 710   ASSIGN/38                 ?654      16?2                 $685                	;0
1521 711   INIT_FCALL_BY_NAME/59     ?0        ?0                   975:'count'         	;1
1522 711   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1523 711   DO_FCALL_BY_NAME/131      $687=     ?0                   ?0                  	;0
1524 711   IS_SMALLER/19             #688=     977:0                $687                	;0
1525 711   BOOL_NOT/13               #689=     #688                 ?0                  	;0
1526 711   JMPZ/43                   ?0        #689                 ?1528               	;0	>>1528
1527 712   GOTO/253                  ?0        ?1304                ?978                	;0
1528 714   GOTO/253                  ?0        ?1261                ?979                	;0	<<1526
1529 716   FE_RESET_R/77             $690=     16?2                 ?1595               	;0
1530 716   FE_FETCH_R/78             ?0        $690                 16?3                	;1595	>>1595	<<1594
1531 718   NOP/0                     ?0        ?0                   ?0                  	;1	<<1590
1532 718   GOTO/253                  ?0        ?1533                ?980                	;0
1533 720   ASSIGN_DIM/147            ?659      16?3                 981:'server_type'   	;0
1534 720   OP_DATA/137               ?0        982:0                ?0                  	;0
1535 721   ASSIGN_DIM/147            ?660      16?3                 983:'parent_id'     	;0
1536 721   OP_DATA/137               ?0        984:NULL             ?0                  	;0
1537 722   ASSIGN_DIM/147            ?661      16?3                 985:'http_broadcast_port'	;0
1538 722   OP_DATA/137               ?0        986:80               ?0                  	;0
1539 723   ASSIGN_DIM/147            ?662      16?3                 987:'https_broadcast_port'	;0
1540 723   OP_DATA/137               ?0        988:443              ?0                  	;0
1541 724   ASSIGN_DIM/147            ?663      16?3                 989:'rtmp_port'     	;0
1542 724   OP_DATA/137               ?0        990:8880             ?0                  	;0
1543 725   NOP/0                     ?0        ?0                   ?0                  	;1
1544 725   GOTO/253                  ?0        ?1545                ?991                	;0
1545 727   ASSIGN_DIM/147            ?664      16?3                 992:'total_services'	;0
1546 727   OP_DATA/137               ?0        993:4                ?0                  	;0
1547 728   ASSIGN_DIM/147            ?665      16?3                 994:'http_ports_add'	;0
1548 728   OP_DATA/137               ?0        995:NULL             ?0                  	;0
1549 729   ASSIGN_DIM/147            ?666      16?3                 996:'https_ports_add'	;0
1550 729   OP_DATA/137               ?0        997:NULL             ?0                  	;0
1551 730   BOOL_NOT/13               #699=     16?14                ?0                  	;0
1552 730   JMPZ/43                   ?0        #699                 ?1555               	;0	>>1555
1553 731   NOP/0                     ?0        ?0                   ?0                  	;1
1554 731   GOTO/253                  ?0        ?1584                ?998                	;0
1555 733   ASSIGN_DIM/147            ?668      16?3                 999:'is_main'       	;0	<<1552
1556 733   OP_DATA/137               ?0        1000:0               ?0                  	;0
1557 734   NOP/0                     ?0        ?0                   ?0                  	;1
1558 734   GOTO/253                  ?0        ?1582                ?1001               	;0
1559 736   INIT_FCALL_BY_NAME/59     ?0        ?0                   1002:'c73Ed8D0b70cE12f'	;2
1560 736   SEND_VAL_EX/116           ?80       1004:'servers'       ?1                  	;0
1561 736   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1562 736   DO_FCALL_BY_NAME/131      $701=     ?0                   ?0                  	;0
1563 736   ASSIGN/38                 ?670      16?3                 $701                	;0
1564 737   INIT_FCALL_BY_NAME/59     ?0        ?0                   1005:'C483A3a59265139E'	;1
1565 737   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1566 737   DO_FCALL_BY_NAME/131      $703=     ?0                   ?0                  	;0
1567 737   ASSIGN/38                 ?672      16?4                 $703                	;0
1568 738   FETCH_DIM_R/81            $705=     16?4                 1007:'columns'      	;0
1569 738   CONCAT/8                  #706=     1008:'INSERT INTO `servers`(' $705                	;0
1570 738   CONCAT/8                  #707=     #706                 1009:') VALUES('    	;0
1571 738   FETCH_DIM_R/81            $708=     16?4                 1010:'placeholder'  	;0
1572 738   CONCAT/8                  #709=     #707                 $708                	;0
1573 738   CONCAT/8                  #710=     #709                 1011:');'           	;0
1574 738   ASSIGN/38                 ?679      16?5                 #710                	;0
1575 739   INIT_METHOD_CALL/112      ?0        16?6                 1012:'query'        	;1
1576 739   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1577 739   FETCH_DIM_R/81            $712=     16?4                 1014:'data'         	;0
1578 739   SEND_UNPACK/165           ?80       $712                 ?1                  	;0
1579 739   DO_FCALL/60               ?681      ?0                   ?0                  	;0
1580 740   NOP/0                     ?0        ?0                   ?0                  	;1
1581 740   GOTO/253                  ?0        ?1589                ?1015               	;0
1582 742   NOP/0                     ?0        ?0                   ?0                  	;1
1583 742   GOTO/253                  ?0        ?1587                ?1016               	;0
1584 744   ASSIGN_DIM/147            ?682      16?3                 1017:'is_main'      	;0
1585 744   OP_DATA/137               ?0        1018:1               ?0                  	;0
1586 745   ASSIGN/38                 ?683      16?14                1019:true           	;0
1587 747   NOP/0                     ?0        ?0                   ?0                  	;1
1588 747   GOTO/253                  ?0        ?1559                ?1020               	;0
1589 748   JMP/42                    ?0        ?1594                ?0                  	;0	>>1594
1590 749   CATCH/107                 ?1        1021:'Exception'     16?7                	;0 CB	>>1594,1531
1591 750   CONCAT/8                  #716=     1023:'Error: '       16?7                	;0
1592 750   CONCAT/8                  #717=     #716                 1024:'
'            	;0
1593 750   ECHO/40                   ?0        #717                 ?0                  	;0
1594 752   JMP/42                    ?0        ?1530                ?0                  	;0	>>1530	<<1589,1590
1595 752   FE_FREE/127               ?0        $690                 ?0                  	;0	<<1529
1596 757   ASSIGN/38                 ?686      16?15                1025:array (
)      	;0
1597 758   GOTO/253                  ?0        ?2512                ?1026               	;0
1598 761   INIT_FCALL_BY_NAME/59     ?0        ?0                   1027:'in_array'     	;2
1599 761   SEND_VAL_EX/116           ?80       1029:'enigma2_devices' ?1                  	;0
1600 761   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1601 761   DO_FCALL_BY_NAME/131      $719=     ?0                   ?0                  	;0
1602 761   BOOL_NOT/13               #720=     $719                 ?0                  	;0
1603 761   JMPZ/43                   ?0        #720                 ?1605               	;0	>>1605
1604 762   GOTO/253                  ?0        ?2033                ?1030               	;0
1605 764   INIT_METHOD_CALL/112      ?0        16?0                 1031:'query'        	;1	<<1603
1606 764   SEND_VAL_EX/116           ?80       1033:'SELECT COUNT(*) AS `count` FROM `enigma2_devices`;' ?1                  	;0
1607 764   DO_FCALL/60               ?689      ?0                   ?0                  	;0
1608 765   INIT_METHOD_CALL/112      ?0        16?0                 1034:'get_row'      	;0
1609 765   DO_FCALL/60               $722=     ?0                   ?0                  	;0
1610 765   FETCH_DIM_R/81            $723=     $722                 1036:'count'        	;0
1611 765   ASSIGN/38                 ?692      16?11                $723                	;0
1612 766   IS_SMALLER/19             #725=     1037:0               16?11               	;0
1613 766   BOOL_NOT/13               #726=     #725                 ?0                  	;0
1614 766   JMPZ/43                   ?0        #726                 ?1616               	;0	>>1616
1615 767   GOTO/253                  ?0        ?2033                ?1038               	;0
1616 769   GOTO/253                  ?0        ?884                 ?1039               	;0	<<1614
1617 771   INIT_METHOD_CALL/112      ?0        16?0                 1040:'query'        	;1
1618 771   SEND_VAL_EX/116           ?80       1042:'SELECT * FROM `groups` WHERE `can_delete` = 1;' ?1                  	;0
1619 771   DO_FCALL/60               ?695      ?0                   ?0                  	;0
1620 772   INIT_METHOD_CALL/112      ?0        16?0                 1043:'get_rows'     	;0
1621 772   DO_FCALL/60               $728=     ?0                   ?0                  	;0
1622 772   ASSIGN/38                 ?697      16?2                 $728                	;0
1623 773   INIT_FCALL_BY_NAME/59     ?0        ?0                   1045:'count'        	;1
1624 773   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1625 773   DO_FCALL_BY_NAME/131      $730=     ?0                   ?0                  	;0
1626 773   IS_SMALLER/19             #731=     1047:0               $730                	;0
1627 773   BOOL_NOT/13               #732=     #731                 ?0                  	;0
1628 773   JMPZ/43                   ?0        #732                 ?1630               	;0	>>1630
1629 774   GOTO/253                  ?0        ?1348                ?1048               	;0
1630 776   INIT_METHOD_CALL/112      ?0        16?6                 1049:'query'        	;1	<<1628
1631 776   SEND_VAL_EX/116           ?80       1051:'DELETE FROM `users_groups` WHERE `can_delete` = 1;' ?1                  	;0
1632 776   DO_FCALL/60               ?701      ?0                   ?0                  	;0
1633 777   INIT_FCALL_BY_NAME/59     ?0        ?0                   1052:'number_format'	;2
1634 777   INIT_FCALL_BY_NAME/59     ?0        ?0                   1054:'count'        	;1
1635 777   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1636 777   DO_FCALL_BY_NAME/131      $734=     ?0                   ?0                  	;0
1637 777   SEND_VAR_NO_REF_EX/50     ?80       $734                 ?1                  	;0
1638 777   SEND_VAL_EX/116           ?96       1056:0               ?2                  	;0
1639 777   DO_FCALL_BY_NAME/131      $735=     ?0                   ?0                  	;0
1640 777   CONCAT/8                  #736=     1057:'Creating '     $735                	;0
1641 777   CONCAT/8                  #737=     #736                 1058:' user groups.
'	;0
1642 777   ECHO/40                   ?0        #737                 ?0                  	;0
1643 778   GOTO/253                  ?0        ?1305                ?1059               	;0
1644 780   JMPZ/43                   ?0        16?8                 ?1646               	;0	>>1646
1645 781   GOTO/253                  ?0        ?1647                ?1060               	;0
1646 783   ASSIGN/38                 ?706      16?8                 1061:array (
  0 => 0,
)	;0	<<1644
1647 785   FE_RESET_R/77             $739=     16?8                 ?1752               	;0
1648 785   FE_FETCH_R/78             ?0        $739                 16?9                	;1752	>>1752	<<1751
1649 787   INIT_METHOD_CALL/112      ?0        16?0                 1062:'query'        	;1	<<1747
1650 787   CONCAT/8                  #740=     1064:'SELECT * FROM `streams_sys` LIMIT ' 16?9                	;0
1651 787   CONCAT/8                  #741=     #740                 1065:', 1000;'      	;0
1652 787   SEND_VAL_EX/116           ?80       #741                 ?1                  	;0
1653 787   DO_FCALL/60               ?710      ?0                   ?0                  	;0
1654 788   INIT_METHOD_CALL/112      ?0        16?0                 1066:'get_rows'     	;0
1655 788   DO_FCALL/60               $743=     ?0                   ?0                  	;0
1656 788   ASSIGN/38                 ?712      16?2                 $743                	;0
1657 789   INIT_FCALL_BY_NAME/59     ?0        ?0                   1068:'count'        	;1
1658 789   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1659 789   DO_FCALL_BY_NAME/131      $745=     ?0                   ?0                  	;0
1660 789   IS_SMALLER/19             #746=     1070:0               $745                	;0
1661 789   BOOL_NOT/13               #747=     #746                 ?0                  	;0
1662 789   JMPZ/43                   ?0        #747                 ?1665               	;0	>>1665
1663 790   NOP/0                     ?0        ?0                   ?0                  	;1
1664 790   GOTO/253                  ?0        ?1746                ?1071               	;0
1665 792   FE_RESET_R/77             $748=     16?2                 ?1745               	;0	<<1662
1666 792   FE_FETCH_R/78             ?0        $748                 16?3                	;1745	>>1745	<<1744
1667 793   NOP/0                     ?0        ?0                   ?0                  	;1
1668 793   NOP/0                     ?0        ?0                   ?0                  	;1
1669 793   GOTO/253                  ?0        ?1706                ?1072               	;0
1670 795   FETCH_DIM_R/81            $749=     16?3                 1073:'pid'          	;0
1671 795   IS_SMALLER_OR_EQUAL/20    #750=     $749                 1074:0              	;0
1672 795   BOOL_NOT/13               #751=     #750                 ?0                  	;0
1673 795   JMPZ/43                   ?0        #751                 ?1677               	;0	>>1677
1674 796   NOP/0                     ?0        ?0                   ?0                  	;1
1675 796   NOP/0                     ?0        ?0                   ?0                  	;1
1676 796   GOTO/253                  ?0        ?1679                ?1075               	;0
1677 798   ASSIGN_DIM/147            ?720      16?3                 1076:'pid'          	;0	<<1673
1678 798   OP_DATA/137               ?0        1077:NULL            ?0                  	;0
1679 800   INIT_FCALL_BY_NAME/59     ?0        ?0                   1078:'C73ED8D0b70Ce12f'	;2
1680 800   SEND_VAL_EX/116           ?80       1080:'streams_servers' ?1                  	;0
1681 800   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1682 800   DO_FCALL_BY_NAME/131      $753=     ?0                   ?0                  	;0
1683 800   ASSIGN/38                 ?722      16?3                 $753                	;0
1684 801   INIT_FCALL_BY_NAME/59     ?0        ?0                   1081:'C483A3A59265139E'	;1
1685 801   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1686 801   DO_FCALL_BY_NAME/131      $755=     ?0                   ?0                  	;0
1687 801   ASSIGN/38                 ?724      16?4                 $755                	;0
1688 802   NOP/0                     ?0        ?0                   ?0                  	;1
1689 802   NOP/0                     ?0        ?0                   ?0                  	;1
1690 802   GOTO/253                  ?0        ?1691                ?1083               	;0
1691 804   FETCH_DIM_R/81            $757=     16?4                 1084:'columns'      	;0
1692 804   CONCAT/8                  #758=     1085:'INSERT INTO `streams_servers`(' $757                	;0
1693 804   CONCAT/8                  #759=     #758                 1086:') VALUES('    	;0
1694 804   FETCH_DIM_R/81            $760=     16?4                 1087:'placeholder'  	;0
1695 804   CONCAT/8                  #761=     #759                 $760                	;0
1696 804   CONCAT/8                  #762=     #761                 1088:');'           	;0
1697 804   ASSIGN/38                 ?731      16?5                 #762                	;0
1698 805   INIT_METHOD_CALL/112      ?0        16?6                 1089:'query'        	;1
1699 805   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1700 805   FETCH_DIM_R/81            $764=     16?4                 1091:'data'         	;0
1701 805   SEND_UNPACK/165           ?80       $764                 ?1                  	;0
1702 805   DO_FCALL/60               ?733      ?0                   ?0                  	;0
1703 807   NOP/0                     ?0        ?0                   ?0                  	;1
1704 807   NOP/0                     ?0        ?0                   ?0                  	;1
1705 807   GOTO/253                  ?0        ?1744                ?1092               	;0
1706 809   FETCH_DIM_R/81            $766=     16?3                 1093:'parent_id'    	;0
1707 809   BOOL_NOT/13               #767=     $766                 ?0                  	;0
1708 809   JMPNZ_EX/47               #767=     #767                 ?1712               	;0	>>1712
1709 809   FETCH_DIM_R/81            $768=     16?3                 1094:'parent_id'    	;0
1710 809   IS_EQUAL/17               #769=     $768                 1095:0              	;0
1711 809   BOOL/52                   #767=     #769                 ?0                  	;0
1712 809   BOOL_NOT/13               #770=     #767                 ?0                  	;0	<<1708
1713 809   JMPZ/43                   ?0        #770                 ?1717               	;0	>>1717
1714 810   NOP/0                     ?0        ?0                   ?0                  	;1
1715 810   NOP/0                     ?0        ?0                   ?0                  	;1
1716 810   GOTO/253                  ?0        ?1719                ?1096               	;0
1717 812   ASSIGN_DIM/147            ?739      16?3                 1097:'parent_id'    	;0	<<1713
1718 812   OP_DATA/137               ?0        1098:NULL            ?0                  	;0
1719 814   FETCH_DIM_R/81            $772=     16?3                 1099:'stream_id'    	;0
1720 814   ISSET_ISEMPTY_DIM_OBJ/115 #773=     16?15                $772                	;33554432
1721 814   BOOL_NOT/13               #774=     #773                 ?0                  	;0
1722 814   JMPZ/43                   ?0        #774                 ?1726               	;0	>>1726
1723 815   NOP/0                     ?0        ?0                   ?0                  	;1
1724 815   NOP/0                     ?0        ?0                   ?0                  	;1
1725 815   GOTO/253                  ?0        ?1733                ?1100               	;0
1726 817   FETCH_DIM_R/81            $776=     16?3                 1102:'stream_id'    	;0	<<1722
1727 817   FETCH_DIM_R/81            $777=     16?15                $776                	;0
1728 817   ASSIGN_DIM/147            ?743      16?3                 1101:'cchannel_rsources'	;0
1729 817   OP_DATA/137               ?0        $777                 ?0                  	;0
1730 818   NOP/0                     ?0        ?0                   ?0                  	;1
1731 818   NOP/0                     ?0        ?0                   ?0                  	;1
1732 818   GOTO/253                  ?0        ?1733                ?1103               	;0
1733 821   ASSIGN_DIM/147            ?746      16?3                 1104:'custom_ffmpeg'	;0
1734 821   OP_DATA/137               ?0        1105:''              ?0                  	;0
1735 822   ASSIGN_DIM/147            ?747      16?3                 1106:'stream_status'	;0
1736 822   OP_DATA/137               ?0        1107:0               ?0                  	;0
1737 823   ASSIGN_DIM/147            ?748      16?3                 1108:'stream_started'	;0
1738 823   OP_DATA/137               ?0        1109:NULL            ?0                  	;0
1739 824   ASSIGN_DIM/147            ?749      16?3                 1110:'monitor_pid'  	;0
1740 824   OP_DATA/137               ?0        1111:NULL            ?0                  	;0
1741 825   NOP/0                     ?0        ?0                   ?0                  	;1
1742 825   NOP/0                     ?0        ?0                   ?0                  	;1
1743 825   GOTO/253                  ?0        ?1670                ?1112               	;0
1744 826   JMP/42                    ?0        ?1666                ?0                  	;0	>>1666
1745 826   FE_FREE/127               ?0        $748                 ?0                  	;0	<<1665
1746 829   JMP/42                    ?0        ?1751                ?0                  	;0	>>1751
1747 830   CATCH/107                 ?1        1113:'Exception'     16?7                	;0 CB	>>1751,1649
1748 831   CONCAT/8                  #782=     1115:'Error: '       16?7                	;0
1749 831   CONCAT/8                  #783=     #782                 1116:'
'            	;0
1750 831   ECHO/40                   ?0        #783                 ?0                  	;0
1751 833   JMP/42                    ?0        ?1648                ?0                  	;0	>>1648	<<1746,1747
1752 833   FE_FREE/127               ?0        $739                 ?0                  	;0	<<1647
1753 836   GOTO/253                  ?0        ?1871                ?1117               	;0
1754 838   INIT_METHOD_CALL/112      ?0        16?0                 1118:'get_row'      	;0
1755 838   DO_FCALL/60               $784=     ?0                   ?0                  	;0
1756 838   FETCH_DIM_R/81            $785=     $784                 1120:'count'        	;0
1757 838   ASSIGN/38                 ?754      16?11                $785                	;0
1758 839   IS_SMALLER/19             #787=     1121:0               16?11               	;0
1759 839   BOOL_NOT/13               #788=     #787                 ?0                  	;0
1760 839   JMPZ/43                   ?0        #788                 ?1762               	;0	>>1762
1761 840   GOTO/253                  ?0        ?59                  ?1122               	;0
1762 842   INIT_METHOD_CALL/112      ?0        16?6                 1123:'query'        	;1	<<1760
1763 842   SEND_VAL_EX/116           ?80       1125:'TRUNCATE `streams_episodes`;' ?1                  	;0
1764 842   DO_FCALL/60               ?757      ?0                   ?0                  	;0
1765 843   INIT_FCALL_BY_NAME/59     ?0        ?0                   1126:'number_format'	;2
1766 843   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
1767 843   SEND_VAL_EX/116           ?96       1128:0               ?2                  	;0
1768 843   DO_FCALL_BY_NAME/131      $790=     ?0                   ?0                  	;0
1769 843   CONCAT/8                  #791=     1129:'Adding '       $790                	;0
1770 843   CONCAT/8                  #792=     #791                 1130:' episodes.
'  	;0
1771 843   ECHO/40                   ?0        #792                 ?0                  	;0
1772 844   INIT_FCALL_BY_NAME/59     ?0        ?0                   1131:'range'        	;3
1773 844   SEND_VAL_EX/116           ?80       1133:0               ?1                  	;0
1774 844   SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
1775 844   SEND_VAL_EX/116           ?112      1134:1000            ?3                  	;0
1776 844   DO_FCALL_BY_NAME/131      $793=     ?0                   ?0                  	;0
1777 844   ASSIGN/38                 ?762      16?8                 $793                	;0
1778 845   GOTO/253                  ?0        ?2720                ?1135               	;0
1779 847   INIT_METHOD_CALL/112      ?0        16?0                 1136:'query'        	;1
1780 847   SEND_VAL_EX/116           ?80       1138:'SELECT * FROM `member_groups` WHERE `can_delete` = 1;' ?1                  	;0
1781 847   DO_FCALL/60               ?763      ?0                   ?0                  	;0
1782 848   INIT_METHOD_CALL/112      ?0        16?0                 1139:'get_rows'     	;0
1783 848   DO_FCALL/60               $796=     ?0                   ?0                  	;0
1784 848   ASSIGN/38                 ?765      16?2                 $796                	;0
1785 849   INIT_FCALL_BY_NAME/59     ?0        ?0                   1141:'count'        	;1
1786 849   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1787 849   DO_FCALL_BY_NAME/131      $798=     ?0                   ?0                  	;0
1788 849   IS_SMALLER/19             #799=     1143:0               $798                	;0
1789 849   BOOL_NOT/13               #800=     #799                 ?0                  	;0
1790 849   JMPZ/43                   ?0        #800                 ?1792               	;0	>>1792
1791 850   GOTO/253                  ?0        ?116                 ?1144               	;0
1792 852   INIT_METHOD_CALL/112      ?0        16?6                 1145:'query'        	;1	<<1790
1793 852   SEND_VAL_EX/116           ?80       1147:'DELETE FROM `users_groups` WHERE `can_delete` = 1;' ?1                  	;0
1794 852   DO_FCALL/60               ?769      ?0                   ?0                  	;0
1795 853   INIT_FCALL_BY_NAME/59     ?0        ?0                   1148:'number_format'	;2
1796 853   INIT_FCALL_BY_NAME/59     ?0        ?0                   1150:'count'        	;1
1797 853   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1798 853   DO_FCALL_BY_NAME/131      $802=     ?0                   ?0                  	;0
1799 853   SEND_VAR_NO_REF_EX/50     ?80       $802                 ?1                  	;0
1800 853   SEND_VAL_EX/116           ?96       1152:0               ?2                  	;0
1801 853   DO_FCALL_BY_NAME/131      $803=     ?0                   ?0                  	;0
1802 853   CONCAT/8                  #804=     1153:'Creating '     $803                	;0
1803 853   CONCAT/8                  #805=     #804                 1154:' user groups.
'	;0
1804 853   ECHO/40                   ?0        #805                 ?0                  	;0
1805 854   GOTO/253                  ?0        ?73                  ?1155               	;0
1806 856   INIT_METHOD_CALL/112      ?0        16?6                 1156:'query'        	;1
1807 856   SEND_VAL_EX/116           ?80       1158:'TRUNCATE `streams_categories`;' ?1                  	;0
1808 856   DO_FCALL/60               ?774      ?0                   ?0                  	;0
1809 857   INIT_FCALL_BY_NAME/59     ?0        ?0                   1159:'number_format'	;2
1810 857   INIT_FCALL_BY_NAME/59     ?0        ?0                   1161:'count'        	;1
1811 857   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1812 857   DO_FCALL_BY_NAME/131      $807=     ?0                   ?0                  	;0
1813 857   SEND_VAR_NO_REF_EX/50     ?80       $807                 ?1                  	;0
1814 857   SEND_VAL_EX/116           ?96       1163:0               ?2                  	;0
1815 857   DO_FCALL_BY_NAME/131      $808=     ?0                   ?0                  	;0
1816 857   CONCAT/8                  #809=     1164:'Creating '     $808                	;0
1817 857   CONCAT/8                  #810=     #809                 1165:' categories.
'	;0
1818 857   ECHO/40                   ?0        #810                 ?0                  	;0
1819 858   FE_RESET_R/77             $811=     16?2                 ?1848               	;0
1820 858   FE_FETCH_R/78             ?0        $811                 16?3                	;1848	>>1848	<<1847
1821 860   INIT_FCALL_BY_NAME/59     ?0        ?0                   1166:'C73Ed8d0B70ce12f'	;2	<<1843
1822 860   SEND_VAL_EX/116           ?80       1168:'streams_categories' ?1                  	;0
1823 860   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1824 860   DO_FCALL_BY_NAME/131      $812=     ?0                   ?0                  	;0
1825 860   ASSIGN/38                 ?781      16?3                 $812                	;0
1826 861   INIT_FCALL_BY_NAME/59     ?0        ?0                   1169:'C483a3a59265139e'	;1
1827 861   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1828 861   DO_FCALL_BY_NAME/131      $814=     ?0                   ?0                  	;0
1829 861   ASSIGN/38                 ?783      16?4                 $814                	;0
1830 862   FETCH_DIM_R/81            $816=     16?4                 1171:'columns'      	;0
1831 862   CONCAT/8                  #817=     1172:'INSERT INTO `streams_categories`(' $816                	;0
1832 862   CONCAT/8                  #818=     #817                 1173:') VALUES('    	;0
1833 862   FETCH_DIM_R/81            $819=     16?4                 1174:'placeholder'  	;0
1834 862   CONCAT/8                  #820=     #818                 $819                	;0
1835 862   CONCAT/8                  #821=     #820                 1175:');'           	;0
1836 862   ASSIGN/38                 ?790      16?5                 #821                	;0
1837 863   INIT_METHOD_CALL/112      ?0        16?6                 1176:'query'        	;1
1838 863   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1839 863   FETCH_DIM_R/81            $823=     16?4                 1178:'data'         	;0
1840 863   SEND_UNPACK/165           ?80       $823                 ?1                  	;0
1841 863   DO_FCALL/60               ?792      ?0                   ?0                  	;0
1842 863   JMP/42                    ?0        ?1847                ?0                  	;0	>>1847
1843 864   CATCH/107                 ?1        1179:'Exception'     16?7                	;0 CB	>>1847,1821
1844 865   CONCAT/8                  #825=     1181:'Error: '       16?7                	;0
1845 865   CONCAT/8                  #826=     #825                 1182:'
'            	;0
1846 865   ECHO/40                   ?0        #826                 ?0                  	;0
1847 867   JMP/42                    ?0        ?1820                ?0                  	;0	>>1820	<<1842,1843
1848 867   FE_FREE/127               ?0        $811                 ?0                  	;0	<<1819
1849 871   GOTO/253                  ?0        ?175                 ?1183               	;0
1850 874   INIT_FCALL_BY_NAME/59     ?0        ?0                   1184:'in_array'     	;2
1851 874   SEND_VAL_EX/116           ?80       1186:'isp_addon'     ?1                  	;0
1852 874   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1853 874   DO_FCALL_BY_NAME/131      $827=     ?0                   ?0                  	;0
1854 874   BOOL_NOT/13               #828=     $827                 ?0                  	;0
1855 874   JMPZ/43                   ?0        #828                 ?1857               	;0	>>1857
1856 875   GOTO/253                  ?0        ?1111                ?1187               	;0
1857 877   INIT_METHOD_CALL/112      ?0        16?0                 1188:'query'        	;1	<<1855
1858 877   SEND_VAL_EX/116           ?80       1190:'SELECT * FROM `isp_addon`;' ?1                  	;0
1859 877   DO_FCALL/60               ?797      ?0                   ?0                  	;0
1860 878   INIT_METHOD_CALL/112      ?0        16?0                 1191:'get_rows'     	;0
1861 878   DO_FCALL/60               $830=     ?0                   ?0                  	;0
1862 878   ASSIGN/38                 ?799      16?2                 $830                	;0
1863 879   INIT_FCALL_BY_NAME/59     ?0        ?0                   1193:'count'        	;1
1864 879   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1865 879   DO_FCALL_BY_NAME/131      $832=     ?0                   ?0                  	;0
1866 879   IS_SMALLER/19             #833=     1195:0               $832                	;0
1867 879   BOOL_NOT/13               #834=     #833                 ?0                  	;0
1868 879   JMPZ/43                   ?0        #834                 ?1870               	;0	>>1870
1869 880   GOTO/253                  ?0        ?1507                ?1196               	;0
1870 882   GOTO/253                  ?0        ?1464                ?1197               	;0	<<1868
1871 886   INIT_FCALL_BY_NAME/59     ?0        ?0                   1198:'in_array'     	;2
1872 886   SEND_VAL_EX/116           ?80       1200:'stream_servers' ?1                  	;0
1873 886   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1874 886   DO_FCALL_BY_NAME/131      $835=     ?0                   ?0                  	;0
1875 886   BOOL_NOT/13               #836=     $835                 ?0                  	;0
1876 886   JMPZ/43                   ?0        #836                 ?1878               	;0	>>1878
1877 887   GOTO/253                  ?0        ?1378                ?1201               	;0
1878 889   INIT_METHOD_CALL/112      ?0        16?0                 1202:'query'        	;1	<<1876
1879 889   SEND_VAL_EX/116           ?80       1204:'SELECT COUNT(*) AS `count` FROM `stream_servers`;' ?1                  	;0
1880 889   DO_FCALL/60               ?805      ?0                   ?0                  	;0
1881 890   INIT_METHOD_CALL/112      ?0        16?0                 1205:'get_row'      	;0
1882 890   DO_FCALL/60               $838=     ?0                   ?0                  	;0
1883 890   FETCH_DIM_R/81            $839=     $838                 1207:'count'        	;0
1884 890   ASSIGN/38                 ?808      16?11                $839                	;0
1885 891   GOTO/253                  ?0        ?2697                ?1208               	;0
1886 893   INIT_METHOD_CALL/112      ?0        16?0                 1209:'query'        	;1
1887 893   SEND_VAL_EX/116           ?80       1211:'SELECT * FROM `epg_sources`;' ?1                  	;0
1888 893   DO_FCALL/60               ?809      ?0                   ?0                  	;0
1889 894   INIT_METHOD_CALL/112      ?0        16?0                 1212:'get_rows'     	;0
1890 894   DO_FCALL/60               $842=     ?0                   ?0                  	;0
1891 894   ASSIGN/38                 ?811      16?2                 $842                	;0
1892 895   INIT_FCALL_BY_NAME/59     ?0        ?0                   1214:'count'        	;1
1893 895   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1894 895   DO_FCALL_BY_NAME/131      $844=     ?0                   ?0                  	;0
1895 895   IS_SMALLER/19             #845=     1216:0               $844                	;0
1896 895   BOOL_NOT/13               #846=     #845                 ?0                  	;0
1897 895   JMPZ/43                   ?0        #846                 ?1899               	;0	>>1899
1898 896   GOTO/253                  ?0        ?1981                ?1217               	;0
1899 898   INIT_METHOD_CALL/112      ?0        16?6                 1218:'query'        	;1	<<1897
1900 898   SEND_VAL_EX/116           ?80       1220:'TRUNCATE `epg`;' ?1                  	;0
1901 898   DO_FCALL/60               ?815      ?0                   ?0                  	;0
1902 899   INIT_FCALL_BY_NAME/59     ?0        ?0                   1221:'number_format'	;2
1903 899   INIT_FCALL_BY_NAME/59     ?0        ?0                   1223:'count'        	;1
1904 899   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1905 899   DO_FCALL_BY_NAME/131      $848=     ?0                   ?0                  	;0
1906 899   SEND_VAR_NO_REF_EX/50     ?80       $848                 ?1                  	;0
1907 899   SEND_VAL_EX/116           ?96       1225:0               ?2                  	;0
1908 899   DO_FCALL_BY_NAME/131      $849=     ?0                   ?0                  	;0
1909 899   CONCAT/8                  #850=     1226:'Processing '   $849                	;0
1910 899   CONCAT/8                  #851=     #850                 1227:' EPG URLs.
'  	;0
1911 899   ECHO/40                   ?0        #851                 ?0                  	;0
1912 900   GOTO/253                  ?0        ?1951                ?1228               	;0
1913 902   IS_SMALLER/19             #852=     1229:0               16?11               	;0
1914 902   BOOL_NOT/13               #853=     #852                 ?0                  	;0
1915 902   JMPZ/43                   ?0        #853                 ?1917               	;0	>>1917
1916 903   GOTO/253                  ?0        ?2894                ?1230               	;0
1917 905   INIT_METHOD_CALL/112      ?0        16?6                 1231:'query'        	;1	<<1915
1918 905   SEND_VAL_EX/116           ?80       1233:'TRUNCATE `users`;' ?1                  	;0
1919 905   DO_FCALL/60               ?822      ?0                   ?0                  	;0
1920 906   INIT_FCALL_BY_NAME/59     ?0        ?0                   1234:'number_format'	;2
1921 906   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
1922 906   SEND_VAL_EX/116           ?96       1236:0               ?2                  	;0
1923 906   DO_FCALL_BY_NAME/131      $855=     ?0                   ?0                  	;0
1924 906   CONCAT/8                  #856=     1237:'Adding '       $855                	;0
1925 906   CONCAT/8                  #857=     #856                 1238:' users.
'     	;0
1926 906   ECHO/40                   ?0        #857                 ?0                  	;0
1927 907   INIT_FCALL_BY_NAME/59     ?0        ?0                   1239:'range'        	;3
1928 907   SEND_VAL_EX/116           ?80       1241:0               ?1                  	;0
1929 907   SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
1930 907   SEND_VAL_EX/116           ?112      1242:1000            ?3                  	;0
1931 907   DO_FCALL_BY_NAME/131      $858=     ?0                   ?0                  	;0
1932 907   ASSIGN/38                 ?827      16?8                 $858                	;0
1933 908   JMPZ/43                   ?0        16?8                 ?1935               	;0	>>1935
1934 909   GOTO/253                  ?0        ?2852                ?1243               	;0
1935 911   GOTO/253                  ?0        ?2851                ?1244               	;0	<<1933
1936 915   INIT_FCALL_BY_NAME/59     ?0        ?0                   1245:'in_array'     	;2
1937 915   SEND_VAL_EX/116           ?80       1247:'members'       ?1                  	;0
1938 915   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1939 915   DO_FCALL_BY_NAME/131      $860=     ?0                   ?0                  	;0
1940 915   BOOL_NOT/13               #861=     $860                 ?0                  	;0
1941 915   JMPZ/43                   ?0        #861                 ?1943               	;0	>>1943
1942 916   GOTO/253                  ?0        ?2447                ?1248               	;0
1943 918   INIT_METHOD_CALL/112      ?0        16?0                 1249:'query'        	;1	<<1941
1944 918   SEND_VAL_EX/116           ?80       1251:'SELECT COUNT(*) AS `count` FROM `members`;' ?1                  	;0
1945 918   DO_FCALL/60               ?830      ?0                   ?0                  	;0
1946 919   INIT_METHOD_CALL/112      ?0        16?0                 1252:'get_row'      	;0
1947 919   DO_FCALL/60               $863=     ?0                   ?0                  	;0
1948 919   FETCH_DIM_R/81            $864=     $863                 1254:'count'        	;0
1949 919   ASSIGN/38                 ?833      16?11                $864                	;0
1950 920   GOTO/253                  ?0        ?1913                ?1255               	;0
1951 922   FE_RESET_R/77             $866=     16?2                 ?1980               	;0
1952 922   FE_FETCH_R/78             ?0        $866                 16?3                	;1980	>>1980	<<1979
1953 924   INIT_FCALL_BY_NAME/59     ?0        ?0                   1256:'c73ED8D0b70ce12f'	;2	<<1975
1954 924   SEND_VAL_EX/116           ?80       1258:'epg'           ?1                  	;0
1955 924   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1956 924   DO_FCALL_BY_NAME/131      $867=     ?0                   ?0                  	;0
1957 924   ASSIGN/38                 ?836      16?3                 $867                	;0
1958 925   INIT_FCALL_BY_NAME/59     ?0        ?0                   1259:'C483a3A59265139E'	;1
1959 925   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1960 925   DO_FCALL_BY_NAME/131      $869=     ?0                   ?0                  	;0
1961 925   ASSIGN/38                 ?838      16?4                 $869                	;0
1962 926   FETCH_DIM_R/81            $871=     16?4                 1261:'columns'      	;0
1963 926   CONCAT/8                  #872=     1262:'INSERT INTO `epg`(' $871                	;0
1964 926   CONCAT/8                  #873=     #872                 1263:') VALUES('    	;0
1965 926   FETCH_DIM_R/81            $874=     16?4                 1264:'placeholder'  	;0
1966 926   CONCAT/8                  #875=     #873                 $874                	;0
1967 926   CONCAT/8                  #876=     #875                 1265:');'           	;0
1968 926   ASSIGN/38                 ?845      16?5                 #876                	;0
1969 927   INIT_METHOD_CALL/112      ?0        16?6                 1266:'query'        	;1
1970 927   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
1971 927   FETCH_DIM_R/81            $878=     16?4                 1268:'data'         	;0
1972 927   SEND_UNPACK/165           ?80       $878                 ?1                  	;0
1973 927   DO_FCALL/60               ?847      ?0                   ?0                  	;0
1974 927   JMP/42                    ?0        ?1979                ?0                  	;0	>>1979
1975 928   CATCH/107                 ?1        1269:'Exception'     16?7                	;0 CB	>>1979,1953
1976 929   CONCAT/8                  #880=     1271:'Error: '       16?7                	;0
1977 929   CONCAT/8                  #881=     #880                 1272:'
'            	;0
1978 929   ECHO/40                   ?0        #881                 ?0                  	;0
1979 931   JMP/42                    ?0        ?1952                ?0                  	;0	>>1952	<<1974,1975
1980 931   FE_FREE/127               ?0        $866                 ?0                  	;0	<<1951
1981 936   INIT_FCALL_BY_NAME/59     ?0        ?0                   1273:'in_array'     	;2
1982 936   SEND_VAL_EX/116           ?80       1275:'member_groups' ?1                  	;0
1983 936   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
1984 936   DO_FCALL_BY_NAME/131      $882=     ?0                   ?0                  	;0
1985 936   BOOL_NOT/13               #883=     $882                 ?0                  	;0
1986 936   JMPZ/43                   ?0        #883                 ?1988               	;0	>>1988
1987 937   GOTO/253                  ?0        ?116                 ?1276               	;0
1988 939   GOTO/253                  ?0        ?1779                ?1277               	;0	<<1986
1989 942   FE_RESET_R/77             $884=     16?8                 ?2032               	;0
1990 942   FE_FETCH_R/78             ?0        $884                 16?9                	;2032	>>2032	<<2031
1991 944   INIT_METHOD_CALL/112      ?0        16?0                 1278:'query'        	;1	<<2027
1992 944   CONCAT/8                  #885=     1280:'SELECT * FROM `enigma2_devices` LIMIT ' 16?9                	;0
1993 944   CONCAT/8                  #886=     #885                 1281:', 1000;'      	;0
1994 944   SEND_VAL_EX/116           ?80       #886                 ?1                  	;0
1995 944   DO_FCALL/60               ?855      ?0                   ?0                  	;0
1996 945   INIT_METHOD_CALL/112      ?0        16?0                 1282:'get_rows'     	;0
1997 945   DO_FCALL/60               $888=     ?0                   ?0                  	;0
1998 945   ASSIGN/38                 ?857      16?2                 $888                	;0
1999 946   FE_RESET_R/77             $890=     16?2                 ?2025               	;0
2000 946   FE_FETCH_R/78             ?0        $890                 16?3                	;2025	>>2025	<<2024
2001 947   ASSIGN_DIM/147            ?859      16?3                 1284:'lock_device'  	;0
2002 947   OP_DATA/137               ?0        1285:1               ?0                  	;0
2003 948   INIT_FCALL_BY_NAME/59     ?0        ?0                   1286:'c73Ed8D0b70ce12f'	;2
2004 948   SEND_VAL_EX/116           ?80       1288:'enigma2_devices' ?1                  	;0
2005 948   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2006 948   DO_FCALL_BY_NAME/131      $892=     ?0                   ?0                  	;0
2007 948   ASSIGN/38                 ?861      16?3                 $892                	;0
2008 949   INIT_FCALL_BY_NAME/59     ?0        ?0                   1289:'c483a3A59265139E'	;1
2009 949   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2010 949   DO_FCALL_BY_NAME/131      $894=     ?0                   ?0                  	;0
2011 949   ASSIGN/38                 ?863      16?4                 $894                	;0
2012 950   FETCH_DIM_R/81            $896=     16?4                 1291:'columns'      	;0
2013 950   CONCAT/8                  #897=     1292:'INSERT INTO `enigma2_devices`(' $896                	;0
2014 950   CONCAT/8                  #898=     #897                 1293:') VALUES('    	;0
2015 950   FETCH_DIM_R/81            $899=     16?4                 1294:'placeholder'  	;0
2016 950   CONCAT/8                  #900=     #898                 $899                	;0
2017 950   CONCAT/8                  #901=     #900                 1295:');'           	;0
2018 950   ASSIGN/38                 ?870      16?5                 #901                	;0
2019 951   INIT_METHOD_CALL/112      ?0        16?6                 1296:'query'        	;1
2020 951   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2021 951   FETCH_DIM_R/81            $903=     16?4                 1298:'data'         	;0
2022 951   SEND_UNPACK/165           ?80       $903                 ?1                  	;0
2023 951   DO_FCALL/60               ?872      ?0                   ?0                  	;0
2024 952   JMP/42                    ?0        ?2000                ?0                  	;0	>>2000
2025 952   FE_FREE/127               ?0        $890                 ?0                  	;0	<<1999
2026 954   JMP/42                    ?0        ?2031                ?0                  	;0	>>2031
2027 955   CATCH/107                 ?1        1299:'Exception'     16?7                	;0 CB	>>2031,1991
2028 956   CONCAT/8                  #905=     1301:'Error: '       16?7                	;0
2029 956   CONCAT/8                  #906=     #905                 1302:'
'            	;0
2030 956   ECHO/40                   ?0        #906                 ?0                  	;0
2031 958   JMP/42                    ?0        ?1990                ?0                  	;0	>>1990	<<2026,2027
2032 958   FE_FREE/127               ?0        $884                 ?0                  	;0	<<1989
2033 963   GOTO/253                  ?0        ?1356                ?1303               	;0
2034 966   INIT_FCALL_BY_NAME/59     ?0        ?0                   1304:'in_array'     	;2
2035 966   SEND_VAL_EX/116           ?80       1306:'tickets_replies' ?1                  	;0
2036 966   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2037 966   DO_FCALL_BY_NAME/131      $907=     ?0                   ?0                  	;0
2038 966   BOOL_NOT/13               #908=     $907                 ?0                  	;0
2039 966   JMPZ/43                   ?0        #908                 ?2041               	;0	>>2041
2040 967   GOTO/253                  ?0        ?2066                ?1307               	;0
2041 969   INIT_METHOD_CALL/112      ?0        16?0                 1308:'query'        	;1	<<2039
2042 969   SEND_VAL_EX/116           ?80       1310:'SELECT * FROM `tickets_replies`;' ?1                  	;0
2043 969   DO_FCALL/60               ?877      ?0                   ?0                  	;0
2044 970   INIT_METHOD_CALL/112      ?0        16?0                 1311:'get_rows'     	;0
2045 970   DO_FCALL/60               $910=     ?0                   ?0                  	;0
2046 970   ASSIGN/38                 ?879      16?2                 $910                	;0
2047 971   INIT_FCALL_BY_NAME/59     ?0        ?0                   1313:'count'        	;1
2048 971   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2049 971   DO_FCALL_BY_NAME/131      $912=     ?0                   ?0                  	;0
2050 971   IS_SMALLER/19             #913=     1315:0               $912                	;0
2051 971   BOOL_NOT/13               #914=     #913                 ?0                  	;0
2052 971   JMPZ/43                   ?0        #914                 ?2054               	;0	>>2054
2053 972   GOTO/253                  ?0        ?2511                ?1316               	;0
2054 974   GOTO/253                  ?0        ?2468                ?1317               	;0	<<2052
2055 979   INIT_FCALL_BY_NAME/59     ?0        ?0                   1318:'in_array'     	;2
2056 979   SEND_VAL_EX/116           ?80       1320:'streams_sys'   ?1                  	;0
2057 979   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2058 979   DO_FCALL_BY_NAME/131      $915=     ?0                   ?0                  	;0
2059 979   BOOL_NOT/13               #916=     $915                 ?0                  	;0
2060 979   JMPZ/43                   ?0        #916                 ?2062               	;0	>>2062
2061 980   GOTO/253                  ?0        ?1871                ?1321               	;0
2062 982   INIT_METHOD_CALL/112      ?0        16?0                 1322:'query'        	;1	<<2060
2063 982   SEND_VAL_EX/116           ?80       1324:'SELECT COUNT(*) AS `count` FROM `streams_sys`;' ?1                  	;0
2064 982   DO_FCALL/60               ?885      ?0                   ?0                  	;0
2065 983   GOTO/253                  ?0        ?2361                ?1325               	;0
2066 986   INIT_FCALL_BY_NAME/59     ?0        ?0                   1326:'in_array'     	;2
2067 986   SEND_VAL_EX/116           ?80       1328:'transcoding_profiles' ?1                  	;0
2068 986   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2069 986   DO_FCALL_BY_NAME/131      $918=     ?0                   ?0                  	;0
2070 986   BOOL_NOT/13               #919=     $918                 ?0                  	;0
2071 986   JMPZ/43                   ?0        #919                 ?2073               	;0	>>2073
2072 987   GOTO/253                  ?0        ?2769                ?1329               	;0
2073 989   INIT_METHOD_CALL/112      ?0        16?0                 1330:'query'        	;1	<<2071
2074 989   SEND_VAL_EX/116           ?80       1332:'SELECT * FROM `transcoding_profiles`;' ?1                  	;0
2075 989   DO_FCALL/60               ?888      ?0                   ?0                  	;0
2076 990   INIT_METHOD_CALL/112      ?0        16?0                 1333:'get_rows'     	;0
2077 990   DO_FCALL/60               $921=     ?0                   ?0                  	;0
2078 990   ASSIGN/38                 ?890      16?2                 $921                	;0
2079 991   INIT_FCALL_BY_NAME/59     ?0        ?0                   1335:'count'        	;1
2080 991   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2081 991   DO_FCALL_BY_NAME/131      $923=     ?0                   ?0                  	;0
2082 991   IS_SMALLER/19             #924=     1337:0               $923                	;0
2083 991   BOOL_NOT/13               #925=     #924                 ?0                  	;0
2084 991   JMPZ/43                   ?0        #925                 ?2086               	;0	>>2086
2085 992   GOTO/253                  ?0        ?2850                ?1338               	;0
2086 994   GOTO/253                  ?0        ?2807                ?1339               	;0	<<2084
2087 996   INIT_FCALL_BY_NAME/59     ?0        ?0                   1340:'in_array'     	;2
2088 996   SEND_VAL_EX/116           ?80       1342:'users'         ?1                  	;0
2089 996   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2090 996   DO_FCALL_BY_NAME/131      $926=     ?0                   ?0                  	;0
2091 996   BOOL_NOT/13               #927=     $926                 ?0                  	;0
2092 996   JMPZ/43                   ?0        #927                 ?2094               	;0	>>2094
2093 997   GOTO/253                  ?0        ?345                 ?1343               	;0
2094 999   INIT_METHOD_CALL/112      ?0        16?0                 1344:'query'        	;1	<<2092
2095 999   SEND_VAL_EX/116           ?80       1346:'SELECT COUNT(*) AS `count` FROM `users`;' ?1                  	;0
2096 999   DO_FCALL/60               ?896      ?0                   ?0                  	;0
2097 1000  INIT_METHOD_CALL/112      ?0        16?0                 1347:'get_row'      	;0
2098 1000  DO_FCALL/60               $929=     ?0                   ?0                  	;0
2099 1000  FETCH_DIM_R/81            $930=     $929                 1349:'count'        	;0
2100 1000  ASSIGN/38                 ?899      16?11                $930                	;0
2101 1001  IS_SMALLER/19             #932=     1350:0               16?11               	;0
2102 1001  BOOL_NOT/13               #933=     #932                 ?0                  	;0
2103 1001  JMPZ/43                   ?0        #933                 ?2105               	;0	>>2105
2104 1002  GOTO/253                  ?0        ?345                 ?1351               	;0
2105 1004  INIT_METHOD_CALL/112      ?0        16?6                 1352:'query'        	;1	<<2103
2106 1004  SEND_VAL_EX/116           ?80       1354:'TRUNCATE `lines`;' ?1                  	;0
2107 1004  DO_FCALL/60               ?902      ?0                   ?0                  	;0
2108 1005  GOTO/253                  ?0        ?2386                ?1355               	;0
2109 1007  INIT_METHOD_CALL/112      ?0        16?6                 1356:'query'        	;1
2110 1007  SEND_VAL_EX/116           ?80       1358:'TRUNCATE `blocked_isps`;' ?1                  	;0
2111 1007  DO_FCALL/60               ?903      ?0                   ?0                  	;0
2112 1008  INIT_FCALL_BY_NAME/59     ?0        ?0                   1359:'number_format'	;2
2113 1008  INIT_FCALL_BY_NAME/59     ?0        ?0                   1361:'count'        	;1
2114 1008  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2115 1008  DO_FCALL_BY_NAME/131      $936=     ?0                   ?0                  	;0
2116 1008  SEND_VAR_NO_REF_EX/50     ?80       $936                 ?1                  	;0
2117 1008  SEND_VAL_EX/116           ?96       1363:0               ?2                  	;0
2118 1008  DO_FCALL_BY_NAME/131      $937=     ?0                   ?0                  	;0
2119 1008  CONCAT/8                  #938=     1364:'Blocking '     $937                	;0
2120 1008  CONCAT/8                  #939=     #938                 1365:' ISP\'s.
'    	;0
2121 1008  ECHO/40                   ?0        #939                 ?0                  	;0
2122 1009  FE_RESET_R/77             $940=     16?2                 ?2151               	;0
2123 1009  FE_FETCH_R/78             ?0        $940                 16?3                	;2151	>>2151	<<2150
2124 1011  INIT_FCALL_BY_NAME/59     ?0        ?0                   1366:'c73eD8D0B70Ce12f'	;2	<<2146
2125 1011  SEND_VAL_EX/116           ?80       1368:'blocked_isps'  ?1                  	;0
2126 1011  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2127 1011  DO_FCALL_BY_NAME/131      $941=     ?0                   ?0                  	;0
2128 1011  ASSIGN/38                 ?910      16?3                 $941                	;0
2129 1012  INIT_FCALL_BY_NAME/59     ?0        ?0                   1369:'c483a3A59265139E'	;1
2130 1012  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2131 1012  DO_FCALL_BY_NAME/131      $943=     ?0                   ?0                  	;0
2132 1012  ASSIGN/38                 ?912      16?4                 $943                	;0
2133 1013  FETCH_DIM_R/81            $945=     16?4                 1371:'columns'      	;0
2134 1013  CONCAT/8                  #946=     1372:'INSERT INTO `blocked_isps`(' $945                	;0
2135 1013  CONCAT/8                  #947=     #946                 1373:') VALUES('    	;0
2136 1013  FETCH_DIM_R/81            $948=     16?4                 1374:'placeholder'  	;0
2137 1013  CONCAT/8                  #949=     #947                 $948                	;0
2138 1013  CONCAT/8                  #950=     #949                 1375:');'           	;0
2139 1013  ASSIGN/38                 ?919      16?5                 #950                	;0
2140 1014  INIT_METHOD_CALL/112      ?0        16?6                 1376:'query'        	;1
2141 1014  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2142 1014  FETCH_DIM_R/81            $952=     16?4                 1378:'data'         	;0
2143 1014  SEND_UNPACK/165           ?80       $952                 ?1                  	;0
2144 1014  DO_FCALL/60               ?921      ?0                   ?0                  	;0
2145 1014  JMP/42                    ?0        ?2150                ?0                  	;0	>>2150
2146 1015  CATCH/107                 ?1        1379:'Exception'     16?7                	;0 CB	>>2150,2124
2147 1016  CONCAT/8                  #954=     1381:'Error: '       16?7                	;0
2148 1016  CONCAT/8                  #955=     #954                 1382:'
'            	;0
2149 1016  ECHO/40                   ?0        #955                 ?0                  	;0
2150 1018  JMP/42                    ?0        ?2123                ?0                  	;0	>>2123	<<2145,2146
2151 1018  FE_FREE/127               ?0        $940                 ?0                  	;0	<<2122
2152 1022  GOTO/253                  ?0        ?1143                ?1383               	;0
2153 1024  FE_RESET_R/77             $956=     16?8                 ?2209               	;0
2154 1024  FE_FETCH_R/78             ?0        $956                 16?9                	;2209	>>2209	<<2208
2155 1026  INIT_METHOD_CALL/112      ?0        16?0                 1384:'query'        	;1	<<2204
2156 1026  CONCAT/8                  #957=     1386:'SELECT * FROM `mag_devices` LIMIT ' 16?9                	;0
2157 1026  CONCAT/8                  #958=     #957                 1387:', 1000;'      	;0
2158 1026  SEND_VAL_EX/116           ?80       #958                 ?1                  	;0
2159 1026  DO_FCALL/60               ?927      ?0                   ?0                  	;0
2160 1027  INIT_METHOD_CALL/112      ?0        16?0                 1388:'get_rows'     	;0
2161 1027  DO_FCALL/60               $960=     ?0                   ?0                  	;0
2162 1027  ASSIGN/38                 ?929      16?2                 $960                	;0
2163 1028  FE_RESET_R/77             $962=     16?2                 ?2202               	;0
2164 1028  FE_FETCH_R/78             ?0        $962                 16?3                	;2202	>>2202	<<2201
2165 1029  INIT_FCALL_BY_NAME/59     ?0        ?0                   1391:'base64_decode'	;1
2166 1029  FETCH_DIM_FUNC_ARG/93     $964=     16?3                 1393:'mac'          	;1
2167 1029  SEND_VAR_EX/66            ?80       $964                 ?1                  	;0
2168 1029  DO_FCALL_BY_NAME/131      $965=     ?0                   ?0                  	;0
2169 1029  ASSIGN_DIM/147            ?931      16?3                 1390:'mac'          	;0
2170 1029  OP_DATA/137               ?0        $965                 ?0                  	;0
2171 1030  ASSIGN_DIM/147            ?934      16?3                 1394:'lock_device'  	;0
2172 1030  OP_DATA/137               ?0        1395:1               ?0                  	;0
2173 1031  FETCH_DIM_R/81            $967=     16?3                 1396:'user_id'      	;0
2174 1031  IS_SMALLER/19             #968=     1397:0               $967                	;0
2175 1031  BOOL_NOT/13               #969=     #968                 ?0                  	;0
2176 1031  JMPZ/43                   ?0        #969                 ?2180               	;0	>>2180
2177 1032  NOP/0                     ?0        ?0                   ?0                  	;1
2178 1032  NOP/0                     ?0        ?0                   ?0                  	;1
2179 1032  GOTO/253                  ?0        ?2201                ?1398               	;0
2180 1034  INIT_FCALL_BY_NAME/59     ?0        ?0                   1399:'C73eD8D0B70CE12F'	;2	<<2176
2181 1034  SEND_VAL_EX/116           ?80       1401:'mag_devices'   ?1                  	;0
2182 1034  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2183 1034  DO_FCALL_BY_NAME/131      $970=     ?0                   ?0                  	;0
2184 1034  ASSIGN/38                 ?939      16?3                 $970                	;0
2185 1035  INIT_FCALL_BY_NAME/59     ?0        ?0                   1402:'C483a3a59265139E'	;1
2186 1035  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2187 1035  DO_FCALL_BY_NAME/131      $972=     ?0                   ?0                  	;0
2188 1035  ASSIGN/38                 ?941      16?4                 $972                	;0
2189 1036  FETCH_DIM_R/81            $974=     16?4                 1404:'columns'      	;0
2190 1036  CONCAT/8                  #975=     1405:'INSERT INTO `mag_devices`(' $974                	;0
2191 1036  CONCAT/8                  #976=     #975                 1406:') VALUES('    	;0
2192 1036  FETCH_DIM_R/81            $977=     16?4                 1407:'placeholder'  	;0
2193 1036  CONCAT/8                  #978=     #976                 $977                	;0
2194 1036  CONCAT/8                  #979=     #978                 1408:');'           	;0
2195 1036  ASSIGN/38                 ?948      16?5                 #979                	;0
2196 1037  INIT_METHOD_CALL/112      ?0        16?6                 1409:'query'        	;1
2197 1037  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2198 1037  FETCH_DIM_R/81            $981=     16?4                 1411:'data'         	;0
2199 1037  SEND_UNPACK/165           ?80       $981                 ?1                  	;0
2200 1037  DO_FCALL/60               ?950      ?0                   ?0                  	;0
2201 1039  JMP/42                    ?0        ?2164                ?0                  	;0	>>2164
2202 1039  FE_FREE/127               ?0        $962                 ?0                  	;0	<<2163
2203 1041  JMP/42                    ?0        ?2208                ?0                  	;0	>>2208
2204 1042  CATCH/107                 ?1        1412:'Exception'     16?7                	;0 CB	>>2208,2155
2205 1043  CONCAT/8                  #983=     1414:'Error: '       16?7                	;0
2206 1043  CONCAT/8                  #984=     #983                 1415:'
'            	;0
2207 1043  ECHO/40                   ?0        #984                 ?0                  	;0
2208 1045  JMP/42                    ?0        ?2154                ?0                  	;0	>>2154	<<2203,2204
2209 1045  FE_FREE/127               ?0        $956                 ?0                  	;0	<<2153
2210 1050  INIT_FCALL_BY_NAME/59     ?0        ?0                   1416:'in_array'     	;2
2211 1050  SEND_VAL_EX/116           ?80       1418:'epg'           ?1                  	;0
2212 1050  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2213 1050  DO_FCALL_BY_NAME/131      $985=     ?0                   ?0                  	;0
2214 1050  BOOL_NOT/13               #986=     $985                 ?0                  	;0
2215 1050  JMPZ/43                   ?0        #986                 ?2217               	;0	>>2217
2216 1051  GOTO/253                  ?0        ?1456                ?1419               	;0
2217 1053  GOTO/253                  ?0        ?1399                ?1420               	;0	<<2215
2218 1055  ASSIGN/38                 ?955      16?25                1421:0              	;0
2219 1056  FE_RESET_R/77             $988=     16?26                ?2248               	;0
2220 1056  FE_FETCH_R/78             ?0        $988                 16?27               	;2248	>>2248	<<2247
2221 1057  INIT_METHOD_CALL/112      ?0        16?0                 1422:'query'        	;2
2222 1057  SEND_VAL_EX/116           ?80       1424:'SHOW TABLES LIKE ?;' ?1                  	;0
2223 1057  SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
2224 1057  DO_FCALL/60               ?957      ?0                   ?0                  	;0
2225 1058  INIT_METHOD_CALL/112      ?0        16?0                 1425:'num_rows'     	;0
2226 1058  DO_FCALL/60               $990=     ?0                   ?0                  	;0
2227 1058  IS_SMALLER/19             #991=     1427:0               $990                	;0
2228 1058  BOOL_NOT/13               #992=     #991                 ?0                  	;0
2229 1058  JMPZ/43                   ?0        #992                 ?2232               	;0	>>2232
2230 1059  NOP/0                     ?0        ?0                   ?0                  	;1
2231 1059  GOTO/253                  ?0        ?2247                ?1428               	;0
2232 1061  INIT_METHOD_CALL/112      ?0        16?0                 1429:'query'        	;1	<<2229
2233 1061  CONCAT/8                  #993=     1431:'SELECT COUNT(*) AS `count` FROM `' 16?27               	;0
2234 1061  CONCAT/8                  #994=     #993                 1432:'`;'           	;0
2235 1061  SEND_VAL_EX/116           ?80       #994                 ?1                  	;0
2236 1061  DO_FCALL/60               ?963      ?0                   ?0                  	;0
2237 1062  INIT_FCALL_BY_NAME/59     ?0        ?0                   1433:'intval'       	;1
2238 1062  INIT_METHOD_CALL/112      ?0        16?0                 1435:'get_row'      	;0
2239 1062  DO_FCALL/60               $996=     ?0                   ?0                  	;0
2240 1062  SEPARATE/156              $996=     $996                 ?0                  	;0
2241 1062  FETCH_DIM_FUNC_ARG/93     $997=     $996                 1437:'count'        	;1
2242 1062  SEND_VAR_EX/66            ?80       $997                 ?1                  	;0
2243 1062  DO_FCALL_BY_NAME/131      $998=     ?0                   ?0                  	;0
2244 1062  JMP_SET/152               #999=     $998                 ?2246               	;0
2245 1062  QM_ASSIGN/22              #999=     1438:0               ?0                  	;0
2246 1062  ASSIGN_ADD/23             ?968      16?25                #999                	;0
2247 1064  JMP/42                    ?0        ?2220                ?0                  	;0	>>2220
2248 1064  FE_FREE/127               ?0        $988                 ?0                  	;0	<<2219
2249 1067  IS_EQUAL/17               #1001=    16?25                1439:0              	;0
2250 1067  BOOL_NOT/13               #1002=    #1001                ?0                  	;0
2251 1067  JMPZ/43                   ?0        #1002                ?2253               	;0	>>2253
2252 1068  GOTO/253                  ?0        ?459                 ?1440               	;0
2253 1070  ECHO/40                   ?0        1441:'
Couldn\'t find anything to migrate in the `xui_migrate` database. Please ensure you restore your backup to that database specifically.

' ?0                  	;0	<<2251
2254 1071  GOTO/253                  ?0        ?458                 ?1442               	;0
2255 1073  INIT_FCALL_BY_NAME/59     ?0        ?0                   1443:'range'        	;3
2256 1073  SEND_VAL_EX/116           ?80       1445:0               ?1                  	;0
2257 1073  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
2258 1073  SEND_VAL_EX/116           ?112      1446:1000            ?3                  	;0
2259 1073  DO_FCALL_BY_NAME/131      $1003=    ?0                   ?0                  	;0
2260 1073  ASSIGN/38                 ?972      16?8                 $1003               	;0
2261 1074  JMPZ/43                   ?0        16?8                 ?2263               	;0	>>2263
2262 1075  GOTO/253                  ?0        ?2264                ?1447               	;0
2263 1077  ASSIGN/38                 ?973      16?8                 1448:array (
  0 => 0,
)	;0	<<2261
2264 1079  FE_RESET_R/77             $1006=    16?8                 ?2305               	;0
2265 1079  FE_FETCH_R/78             ?0        $1006                16?9                	;2305	>>2305	<<2304
2266 1081  INIT_METHOD_CALL/112      ?0        16?0                 1449:'query'        	;1	<<2300
2267 1081  CONCAT/8                  #1007=    1451:'SELECT * FROM `streams_options` LIMIT ' 16?9                	;0
2268 1081  CONCAT/8                  #1008=    #1007                1452:', 1000;'      	;0
2269 1081  SEND_VAL_EX/116           ?80       #1008                ?1                  	;0
2270 1081  DO_FCALL/60               ?977      ?0                   ?0                  	;0
2271 1082  INIT_METHOD_CALL/112      ?0        16?0                 1453:'get_rows'     	;0
2272 1082  DO_FCALL/60               $1010=    ?0                   ?0                  	;0
2273 1082  ASSIGN/38                 ?979      16?2                 $1010               	;0
2274 1083  FE_RESET_R/77             $1012=    16?2                 ?2298               	;0
2275 1083  FE_FETCH_R/78             ?0        $1012                16?3                	;2298	>>2298	<<2297
2276 1084  INIT_FCALL_BY_NAME/59     ?0        ?0                   1455:'c73eD8D0b70cE12f'	;2
2277 1084  SEND_VAL_EX/116           ?80       1457:'streams_options' ?1                  	;0
2278 1084  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2279 1084  DO_FCALL_BY_NAME/131      $1013=    ?0                   ?0                  	;0
2280 1084  ASSIGN/38                 ?982      16?3                 $1013               	;0
2281 1085  INIT_FCALL_BY_NAME/59     ?0        ?0                   1458:'c483a3a59265139e'	;1
2282 1085  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2283 1085  DO_FCALL_BY_NAME/131      $1015=    ?0                   ?0                  	;0
2284 1085  ASSIGN/38                 ?984      16?4                 $1015               	;0
2285 1086  FETCH_DIM_R/81            $1017=    16?4                 1460:'columns'      	;0
2286 1086  CONCAT/8                  #1018=    1461:'INSERT INTO `streams_options`(' $1017               	;0
2287 1086  CONCAT/8                  #1019=    #1018                1462:') VALUES('    	;0
2288 1086  FETCH_DIM_R/81            $1020=    16?4                 1463:'placeholder'  	;0
2289 1086  CONCAT/8                  #1021=    #1019                $1020               	;0
2290 1086  CONCAT/8                  #1022=    #1021                1464:');'           	;0
2291 1086  ASSIGN/38                 ?991      16?5                 #1022               	;0
2292 1087  INIT_METHOD_CALL/112      ?0        16?6                 1465:'query'        	;1
2293 1087  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2294 1087  FETCH_DIM_R/81            $1024=    16?4                 1467:'data'         	;0
2295 1087  SEND_UNPACK/165           ?80       $1024                ?1                  	;0
2296 1087  DO_FCALL/60               ?993      ?0                   ?0                  	;0
2297 1088  JMP/42                    ?0        ?2275                ?0                  	;0	>>2275
2298 1088  FE_FREE/127               ?0        $1012                ?0                  	;0	<<2274
2299 1090  JMP/42                    ?0        ?2304                ?0                  	;0	>>2304
2300 1091  CATCH/107                 ?1        1468:'Exception'     16?7                	;0 CB	>>2304,2266
2301 1092  CONCAT/8                  #1026=    1470:'Error: '       16?7                	;0
2302 1092  CONCAT/8                  #1027=    #1026                1471:'
'            	;0
2303 1092  ECHO/40                   ?0        #1027                ?0                  	;0
2304 1094  JMP/42                    ?0        ?2265                ?0                  	;0	>>2265	<<2299,2300
2305 1094  FE_FREE/127               ?0        $1006                ?0                  	;0	<<2264
2306 1096  GOTO/253                  ?0        ?2055                ?1472               	;0
2307 1098  INIT_METHOD_CALL/112      ?0        16?0                 1473:'query'        	;1
2308 1098  SEND_VAL_EX/116           ?80       1475:'SELECT * FROM `rtmp_ips`;' ?1                  	;0
2309 1098  DO_FCALL/60               ?996      ?0                   ?0                  	;0
2310 1099  INIT_METHOD_CALL/112      ?0        16?0                 1476:'get_rows'     	;0
2311 1099  DO_FCALL/60               $1029=    ?0                   ?0                  	;0
2312 1099  ASSIGN/38                 ?998      16?2                 $1029               	;0
2313 1100  INIT_FCALL_BY_NAME/59     ?0        ?0                   1478:'count'        	;1
2314 1100  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2315 1100  DO_FCALL_BY_NAME/131      $1031=    ?0                   ?0                  	;0
2316 1100  IS_SMALLER/19             #1032=    1480:0               $1031               	;0
2317 1100  BOOL_NOT/13               #1033=    #1032                ?0                  	;0
2318 1100  JMPZ/43                   ?0        #1033                ?2320               	;0	>>2320
2319 1101  GOTO/253                  ?0        ?2568                ?1481               	;0
2320 1103  INIT_METHOD_CALL/112      ?0        16?6                 1482:'query'        	;1	<<2318
2321 1103  SEND_VAL_EX/116           ?80       1484:'TRUNCATE `rtmp_ips`;' ?1                  	;0
2322 1103  DO_FCALL/60               ?1002     ?0                   ?0                  	;0
2323 1104  INIT_FCALL_BY_NAME/59     ?0        ?0                   1485:'number_format'	;2
2324 1104  INIT_FCALL_BY_NAME/59     ?0        ?0                   1487:'count'        	;1
2325 1104  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2326 1104  DO_FCALL_BY_NAME/131      $1035=    ?0                   ?0                  	;0
2327 1104  SEND_VAR_NO_REF_EX/50     ?80       $1035                ?1                  	;0
2328 1104  SEND_VAL_EX/116           ?96       1489:0               ?2                  	;0
2329 1104  DO_FCALL_BY_NAME/131      $1036=    ?0                   ?0                  	;0
2330 1104  CONCAT/8                  #1037=    1490:'Authorising '  $1036               	;0
2331 1104  CONCAT/8                  #1038=    #1037                1491:' RTMP IPs.
'  	;0
2332 1104  ECHO/40                   ?0        #1038                ?0                  	;0
2333 1105  GOTO/253                  ?0        ?2534                ?1492               	;0
2334 1108  FE_RESET_R/77             $1039=    16?8                 ?2359               	;0
2335 1108  FE_FETCH_R/78             ?0        $1039                16?9                	;2359	>>2359	<<2358
2336 1110  INIT_METHOD_CALL/112      ?0        16?0                 1493:'query'        	;1	<<2354
2337 1110  CONCAT/8                  #1040=    1495:'SELECT * FROM `user_output` LIMIT ' 16?9                	;0
2338 1110  CONCAT/8                  #1041=    #1040                1496:', 1000;'      	;0
2339 1110  SEND_VAL_EX/116           ?80       #1041                ?1                  	;0
2340 1110  DO_FCALL/60               ?1010     ?0                   ?0                  	;0
2341 1111  INIT_METHOD_CALL/112      ?0        16?0                 1497:'get_rows'     	;0
2342 1111  DO_FCALL/60               $1043=    ?0                   ?0                  	;0
2343 1111  ASSIGN/38                 ?1012     16?2                 $1043               	;0
2344 1112  FE_RESET_R/77             $1045=    16?2                 ?2352               	;0
2345 1112  FE_FETCH_R/78             ?0        $1045                16?3                	;2352	>>2352	<<2351
2346 1113  FETCH_DIM_R/81            $1046=    16?3                 1499:'user_id'      	;0
2347 1113  FETCH_DIM_R/81            $1049=    16?3                 1500:'access_output_id'	;0
2348 1113  FETCH_DIM_W/84            $1047=    16?10                $1046               	;0
2349 1113  ASSIGN_DIM/147            ?1016     $1047                ?1668066656         	;0
2350 1113  OP_DATA/137               ?0        $1049                ?0                  	;0
2351 1114  JMP/42                    ?0        ?2345                ?0                  	;0	>>2345
2352 1114  FE_FREE/127               ?0        $1045                ?0                  	;0	<<2344
2353 1116  JMP/42                    ?0        ?2358                ?0                  	;0	>>2358
2354 1117  CATCH/107                 ?1        1501:'Exception'     16?7                	;0 CB	>>2358,2336
2355 1118  CONCAT/8                  #1050=    1503:'Error: '       16?7                	;0
2356 1118  CONCAT/8                  #1051=    #1050                1504:'
'            	;0
2357 1118  ECHO/40                   ?0        #1051                ?0                  	;0
2358 1120  JMP/42                    ?0        ?2335                ?0                  	;0	>>2335	<<2353,2354
2359 1120  FE_FREE/127               ?0        $1039                ?0                  	;0	<<2334
2360 1125  GOTO/253                  ?0        ?2087                ?1505               	;0
2361 1127  INIT_METHOD_CALL/112      ?0        16?0                 1506:'get_row'      	;0
2362 1127  DO_FCALL/60               $1052=    ?0                   ?0                  	;0
2363 1127  FETCH_DIM_R/81            $1053=    $1052                1508:'count'        	;0
2364 1127  ASSIGN/38                 ?1022     16?11                $1053               	;0
2365 1128  IS_SMALLER/19             #1055=    1509:0               16?11               	;0
2366 1128  BOOL_NOT/13               #1056=    #1055                ?0                  	;0
2367 1128  JMPZ/43                   ?0        #1056                ?2369               	;0	>>2369
2368 1129  GOTO/253                  ?0        ?1871                ?1510               	;0
2369 1131  INIT_METHOD_CALL/112      ?0        16?6                 1511:'query'        	;1	<<2367
2370 1131  SEND_VAL_EX/116           ?80       1513:'TRUNCATE `streams_servers`;' ?1                  	;0
2371 1131  DO_FCALL/60               ?1025     ?0                   ?0                  	;0
2372 1132  INIT_FCALL_BY_NAME/59     ?0        ?0                   1514:'number_format'	;2
2373 1132  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
2374 1132  SEND_VAL_EX/116           ?96       1516:0               ?2                  	;0
2375 1132  DO_FCALL_BY_NAME/131      $1058=    ?0                   ?0                  	;0
2376 1132  CONCAT/8                  #1059=    1517:'Allocating '   $1058               	;0
2377 1132  CONCAT/8                  #1060=    #1059                1518:' streams to servers.
'	;0
2378 1132  ECHO/40                   ?0        #1060                ?0                  	;0
2379 1133  INIT_FCALL_BY_NAME/59     ?0        ?0                   1519:'range'        	;3
2380 1133  SEND_VAL_EX/116           ?80       1521:0               ?1                  	;0
2381 1133  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
2382 1133  SEND_VAL_EX/116           ?112      1522:1000            ?3                  	;0
2383 1133  DO_FCALL_BY_NAME/131      $1061=    ?0                   ?0                  	;0
2384 1133  ASSIGN/38                 ?1030     16?8                 $1061               	;0
2385 1134  GOTO/253                  ?0        ?1644                ?1523               	;0
2386 1136  INIT_FCALL_BY_NAME/59     ?0        ?0                   1524:'number_format'	;2
2387 1136  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
2388 1136  SEND_VAL_EX/116           ?96       1526:0               ?2                  	;0
2389 1136  DO_FCALL_BY_NAME/131      $1063=    ?0                   ?0                  	;0
2390 1136  CONCAT/8                  #1064=    1527:'Adding '       $1063               	;0
2391 1136  CONCAT/8                  #1065=    #1064                1528:' lines.
'     	;0
2392 1136  ECHO/40                   ?0        #1065                ?0                  	;0
2393 1137  INIT_FCALL_BY_NAME/59     ?0        ?0                   1529:'range'        	;3
2394 1137  SEND_VAL_EX/116           ?80       1531:0               ?1                  	;0
2395 1137  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
2396 1137  SEND_VAL_EX/116           ?112      1532:1000            ?3                  	;0
2397 1137  DO_FCALL_BY_NAME/131      $1066=    ?0                   ?0                  	;0
2398 1137  ASSIGN/38                 ?1035     16?8                 $1066               	;0
2399 1138  JMPZ/43                   ?0        16?8                 ?2401               	;0	>>2401
2400 1139  GOTO/253                  ?0        ?2402                ?1533               	;0
2401 1141  ASSIGN/38                 ?1036     16?8                 1534:array (
  0 => 0,
)	;0	<<2399
2402 1143  GOTO/253                  ?0        ?240                 ?1535               	;0
2403 1145  INIT_METHOD_CALL/112      ?0        16?6                 1536:'query'        	;1
2404 1145  SEND_VAL_EX/116           ?80       1538:'TRUNCATE `streams_categories`;' ?1                  	;0
2405 1145  DO_FCALL/60               ?1037     ?0                   ?0                  	;0
2406 1146  INIT_FCALL_BY_NAME/59     ?0        ?0                   1539:'number_format'	;2
2407 1146  INIT_FCALL_BY_NAME/59     ?0        ?0                   1541:'count'        	;1
2408 1146  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2409 1146  DO_FCALL_BY_NAME/131      $1070=    ?0                   ?0                  	;0
2410 1146  SEND_VAR_NO_REF_EX/50     ?80       $1070                ?1                  	;0
2411 1146  SEND_VAL_EX/116           ?96       1543:0               ?2                  	;0
2412 1146  DO_FCALL_BY_NAME/131      $1071=    ?0                   ?0                  	;0
2413 1146  CONCAT/8                  #1072=    1544:'Creating '     $1071               	;0
2414 1146  CONCAT/8                  #1073=    #1072                1545:' categories.
'	;0
2415 1146  ECHO/40                   ?0        #1073                ?0                  	;0
2416 1147  FE_RESET_R/77             $1074=    16?2                 ?2445               	;0
2417 1147  FE_FETCH_R/78             ?0        $1074                16?3                	;2445	>>2445	<<2444
2418 1149  INIT_FCALL_BY_NAME/59     ?0        ?0                   1546:'C73ed8D0B70ce12f'	;2	<<2440
2419 1149  SEND_VAL_EX/116           ?80       1548:'streams_categories' ?1                  	;0
2420 1149  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2421 1149  DO_FCALL_BY_NAME/131      $1075=    ?0                   ?0                  	;0
2422 1149  ASSIGN/38                 ?1044     16?3                 $1075               	;0
2423 1150  INIT_FCALL_BY_NAME/59     ?0        ?0                   1549:'c483A3A59265139E'	;1
2424 1150  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2425 1150  DO_FCALL_BY_NAME/131      $1077=    ?0                   ?0                  	;0
2426 1150  ASSIGN/38                 ?1046     16?4                 $1077               	;0
2427 1151  FETCH_DIM_R/81            $1079=    16?4                 1551:'columns'      	;0
2428 1151  CONCAT/8                  #1080=    1552:'INSERT INTO `streams_categories`(' $1079               	;0
2429 1151  CONCAT/8                  #1081=    #1080                1553:') VALUES('    	;0
2430 1151  FETCH_DIM_R/81            $1082=    16?4                 1554:'placeholder'  	;0
2431 1151  CONCAT/8                  #1083=    #1081                $1082               	;0
2432 1151  CONCAT/8                  #1084=    #1083                1555:');'           	;0
2433 1151  ASSIGN/38                 ?1053     16?5                 #1084               	;0
2434 1152  INIT_METHOD_CALL/112      ?0        16?6                 1556:'query'        	;1
2435 1152  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2436 1152  FETCH_DIM_R/81            $1086=    16?4                 1558:'data'         	;0
2437 1152  SEND_UNPACK/165           ?80       $1086                ?1                  	;0
2438 1152  DO_FCALL/60               ?1055     ?0                   ?0                  	;0
2439 1152  JMP/42                    ?0        ?2444                ?0                  	;0	>>2444
2440 1153  CATCH/107                 ?1        1559:'Exception'     16?7                	;0 CB	>>2444,2418
2441 1154  CONCAT/8                  #1088=    1561:'Error: '       16?7                	;0
2442 1154  CONCAT/8                  #1089=    #1088                1562:'
'            	;0
2443 1154  ECHO/40                   ?0        #1089                ?0                  	;0
2444 1156  JMP/42                    ?0        ?2417                ?0                  	;0	>>2417	<<2439,2440
2445 1156  FE_FREE/127               ?0        $1074                ?0                  	;0	<<2416
2446 1160  GOTO/253                  ?0        ?1508                ?1563               	;0
2447 1163  INIT_FCALL_BY_NAME/59     ?0        ?0                   1564:'in_array'     	;2
2448 1163  SEND_VAL_EX/116           ?80       1566:'blocked_ips'   ?1                  	;0
2449 1163  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2450 1163  DO_FCALL_BY_NAME/131      $1090=    ?0                   ?0                  	;0
2451 1163  BOOL_NOT/13               #1091=    $1090                ?0                  	;0
2452 1163  JMPZ/43                   ?0        #1091                ?2454               	;0	>>2454
2453 1164  GOTO/253                  ?0        ?1191                ?1567               	;0
2454 1166  INIT_METHOD_CALL/112      ?0        16?0                 1568:'query'        	;1	<<2452
2455 1166  SEND_VAL_EX/116           ?80       1570:'SELECT * FROM `blocked_ips`;' ?1                  	;0
2456 1166  DO_FCALL/60               ?1060     ?0                   ?0                  	;0
2457 1167  INIT_METHOD_CALL/112      ?0        16?0                 1571:'get_rows'     	;0
2458 1167  DO_FCALL/60               $1093=    ?0                   ?0                  	;0
2459 1167  ASSIGN/38                 ?1062     16?2                 $1093               	;0
2460 1168  INIT_FCALL_BY_NAME/59     ?0        ?0                   1573:'count'        	;1
2461 1168  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2462 1168  DO_FCALL_BY_NAME/131      $1095=    ?0                   ?0                  	;0
2463 1168  IS_SMALLER/19             #1096=    1575:0               $1095               	;0
2464 1168  BOOL_NOT/13               #1097=    #1096                ?0                  	;0
2465 1168  JMPZ/43                   ?0        #1097                ?2467               	;0	>>2467
2466 1169  GOTO/253                  ?0        ?1085                ?1576               	;0
2467 1171  GOTO/253                  ?0        ?1042                ?1577               	;0	<<2465
2468 1173  INIT_METHOD_CALL/112      ?0        16?6                 1578:'query'        	;1
2469 1173  SEND_VAL_EX/116           ?80       1580:'TRUNCATE `tickets_replies`;' ?1                  	;0
2470 1173  DO_FCALL/60               ?1066     ?0                   ?0                  	;0
2471 1174  INIT_FCALL_BY_NAME/59     ?0        ?0                   1581:'number_format'	;2
2472 1174  INIT_FCALL_BY_NAME/59     ?0        ?0                   1583:'count'        	;1
2473 1174  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2474 1174  DO_FCALL_BY_NAME/131      $1099=    ?0                   ?0                  	;0
2475 1174  SEND_VAR_NO_REF_EX/50     ?80       $1099                ?1                  	;0
2476 1174  SEND_VAL_EX/116           ?96       1585:0               ?2                  	;0
2477 1174  DO_FCALL_BY_NAME/131      $1100=    ?0                   ?0                  	;0
2478 1174  CONCAT/8                  #1101=    1586:'Posting '      $1100               	;0
2479 1174  CONCAT/8                  #1102=    #1101                1587:' replies.
'   	;0
2480 1174  ECHO/40                   ?0        #1102                ?0                  	;0
2481 1175  FE_RESET_R/77             $1103=    16?2                 ?2510               	;0
2482 1175  FE_FETCH_R/78             ?0        $1103                16?3                	;2510	>>2510	<<2509
2483 1177  INIT_FCALL_BY_NAME/59     ?0        ?0                   1588:'c73eD8d0B70Ce12F'	;2	<<2505
2484 1177  SEND_VAL_EX/116           ?80       1590:'tickets_replies' ?1                  	;0
2485 1177  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2486 1177  DO_FCALL_BY_NAME/131      $1104=    ?0                   ?0                  	;0
2487 1177  ASSIGN/38                 ?1073     16?3                 $1104               	;0
2488 1178  INIT_FCALL_BY_NAME/59     ?0        ?0                   1591:'c483a3a59265139e'	;1
2489 1178  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2490 1178  DO_FCALL_BY_NAME/131      $1106=    ?0                   ?0                  	;0
2491 1178  ASSIGN/38                 ?1075     16?4                 $1106               	;0
2492 1179  FETCH_DIM_R/81            $1108=    16?4                 1593:'columns'      	;0
2493 1179  CONCAT/8                  #1109=    1594:'INSERT INTO `tickets_replies`(' $1108               	;0
2494 1179  CONCAT/8                  #1110=    #1109                1595:') VALUES('    	;0
2495 1179  FETCH_DIM_R/81            $1111=    16?4                 1596:'placeholder'  	;0
2496 1179  CONCAT/8                  #1112=    #1110                $1111               	;0
2497 1179  CONCAT/8                  #1113=    #1112                1597:');'           	;0
2498 1179  ASSIGN/38                 ?1082     16?5                 #1113               	;0
2499 1180  INIT_METHOD_CALL/112      ?0        16?6                 1598:'query'        	;1
2500 1180  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2501 1180  FETCH_DIM_R/81            $1115=    16?4                 1600:'data'         	;0
2502 1180  SEND_UNPACK/165           ?80       $1115                ?1                  	;0
2503 1180  DO_FCALL/60               ?1084     ?0                   ?0                  	;0
2504 1180  JMP/42                    ?0        ?2509                ?0                  	;0	>>2509
2505 1181  CATCH/107                 ?1        1601:'Exception'     16?7                	;0 CB	>>2509,2483
2506 1182  CONCAT/8                  #1117=    1603:'Error: '       16?7                	;0
2507 1182  CONCAT/8                  #1118=    #1117                1604:'
'            	;0
2508 1182  ECHO/40                   ?0        #1118                ?0                  	;0
2509 1184  JMP/42                    ?0        ?2482                ?0                  	;0	>>2482	<<2504,2505
2510 1184  FE_FREE/127               ?0        $1103                ?0                  	;0	<<2481
2511 1188  GOTO/253                  ?0        ?2066                ?1605               	;0
2512 1190  INIT_FCALL_BY_NAME/59     ?0        ?0                   1606:'in_array'     	;2
2513 1190  SEND_VAL_EX/116           ?80       1608:'streams'       ?1                  	;0
2514 1190  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2515 1190  DO_FCALL_BY_NAME/131      $1119=    ?0                   ?0                  	;0
2516 1190  BOOL_NOT/13               #1120=    $1119                ?0                  	;0
2517 1190  JMPZ/43                   ?0        #1120                ?2519               	;0	>>2519
2518 1191  GOTO/253                  ?0        ?760                 ?1609               	;0
2519 1193  INIT_METHOD_CALL/112      ?0        16?0                 1610:'query'        	;1	<<2517
2520 1193  SEND_VAL_EX/116           ?80       1612:'SELECT COUNT(*) AS `count` FROM `streams`;' ?1                  	;0
2521 1193  DO_FCALL/60               ?1089     ?0                   ?0                  	;0
2522 1194  INIT_METHOD_CALL/112      ?0        16?0                 1613:'get_row'      	;0
2523 1194  DO_FCALL/60               $1122=    ?0                   ?0                  	;0
2524 1194  FETCH_DIM_R/81            $1123=    $1122                1615:'count'        	;0
2525 1194  ASSIGN/38                 ?1092     16?11                $1123               	;0
2526 1195  IS_SMALLER/19             #1125=    1616:0               16?11               	;0
2527 1195  BOOL_NOT/13               #1126=    #1125                ?0                  	;0
2528 1195  JMPZ/43                   ?0        #1126                ?2530               	;0	>>2530
2529 1196  GOTO/253                  ?0        ?760                 ?1617               	;0
2530 1198  INIT_METHOD_CALL/112      ?0        16?6                 1618:'query'        	;1	<<2528
2531 1198  SEND_VAL_EX/116           ?80       1620:'TRUNCATE `streams`;' ?1                  	;0
2532 1198  DO_FCALL/60               ?1095     ?0                   ?0                  	;0
2533 1199  GOTO/253                  ?0        ?3016                ?1621               	;0
2534 1201  FE_RESET_R/77             $1128=    16?2                 ?2567               	;0
2535 1201  FE_FETCH_R/78             ?0        $1128                16?3                	;2567	>>2567	<<2566
2536 1203  INIT_FCALL_BY_NAME/59     ?0        ?0                   1622:'C73Ed8D0B70ce12F'	;2	<<2562
2537 1203  SEND_VAL_EX/116           ?80       1624:'rtmp_ips'      ?1                  	;0
2538 1203  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2539 1203  DO_FCALL_BY_NAME/131      $1129=    ?0                   ?0                  	;0
2540 1203  ASSIGN/38                 ?1098     16?3                 $1129               	;0
2541 1204  ASSIGN_DIM/147            ?1099     16?3                 1625:'push'         	;0
2542 1204  OP_DATA/137               ?0        1626:1               ?0                  	;0
2543 1205  ASSIGN_DIM/147            ?1100     16?3                 1627:'pull'         	;0
2544 1205  OP_DATA/137               ?0        1628:1               ?0                  	;0
2545 1206  INIT_FCALL_BY_NAME/59     ?0        ?0                   1629:'C483A3A59265139E'	;1
2546 1206  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2547 1206  DO_FCALL_BY_NAME/131      $1133=    ?0                   ?0                  	;0
2548 1206  ASSIGN/38                 ?1102     16?4                 $1133               	;0
2549 1207  FETCH_DIM_R/81            $1135=    16?4                 1631:'columns'      	;0
2550 1207  CONCAT/8                  #1136=    1632:'INSERT INTO `rtmp_ips`(' $1135               	;0
2551 1207  CONCAT/8                  #1137=    #1136                1633:') VALUES('    	;0
2552 1207  FETCH_DIM_R/81            $1138=    16?4                 1634:'placeholder'  	;0
2553 1207  CONCAT/8                  #1139=    #1137                $1138               	;0
2554 1207  CONCAT/8                  #1140=    #1139                1635:');'           	;0
2555 1207  ASSIGN/38                 ?1109     16?5                 #1140               	;0
2556 1208  INIT_METHOD_CALL/112      ?0        16?6                 1636:'query'        	;1
2557 1208  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2558 1208  FETCH_DIM_R/81            $1142=    16?4                 1638:'data'         	;0
2559 1208  SEND_UNPACK/165           ?80       $1142                ?1                  	;0
2560 1208  DO_FCALL/60               ?1111     ?0                   ?0                  	;0
2561 1208  JMP/42                    ?0        ?2566                ?0                  	;0	>>2566
2562 1209  CATCH/107                 ?1        1639:'Exception'     16?7                	;0 CB	>>2566,2536
2563 1210  CONCAT/8                  #1144=    1641:'Error: '       16?7                	;0
2564 1210  CONCAT/8                  #1145=    #1144                1642:'
'            	;0
2565 1210  ECHO/40                   ?0        #1145                ?0                  	;0
2566 1212  JMP/42                    ?0        ?2535                ?0                  	;0	>>2535	<<2561,2562
2567 1212  FE_FREE/127               ?0        $1128                ?0                  	;0	<<2534
2568 1217  INIT_FCALL_BY_NAME/59     ?0        ?0                   1643:'in_array'     	;2
2569 1217  SEND_VAL_EX/116           ?80       1645:'series'        ?1                  	;0
2570 1217  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2571 1217  DO_FCALL_BY_NAME/131      $1146=    ?0                   ?0                  	;0
2572 1217  BOOL_NOT/13               #1147=    $1146                ?0                  	;0
2573 1217  JMPZ/43                   ?0        #1147                ?2575               	;0	>>2575
2574 1218  GOTO/253                  ?0        ?1132                ?1646               	;0
2575 1220  GOTO/253                  ?0        ?2785                ?1647               	;0	<<2573
2576 1222  INIT_FCALL_BY_NAME/59     ?0        ?0                   1648:'number_format'	;2
2577 1222  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
2578 1222  SEND_VAL_EX/116           ?96       1650:0               ?2                  	;0
2579 1222  DO_FCALL_BY_NAME/131      $1148=    ?0                   ?0                  	;0
2580 1222  CONCAT/8                  #1149=    1651:'Authorising '  $1148               	;0
2581 1222  CONCAT/8                  #1150=    #1149                1652:' MAG devices.
'	;0
2582 1222  ECHO/40                   ?0        #1150                ?0                  	;0
2583 1223  INIT_FCALL_BY_NAME/59     ?0        ?0                   1653:'range'        	;3
2584 1223  SEND_VAL_EX/116           ?80       1655:0               ?1                  	;0
2585 1223  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
2586 1223  SEND_VAL_EX/116           ?112      1656:1000            ?3                  	;0
2587 1223  DO_FCALL_BY_NAME/131      $1151=    ?0                   ?0                  	;0
2588 1223  ASSIGN/38                 ?1120     16?8                 $1151               	;0
2589 1224  JMPZ/43                   ?0        16?8                 ?2591               	;0	>>2591
2590 1225  GOTO/253                  ?0        ?2592                ?1657               	;0
2591 1227  ASSIGN/38                 ?1121     16?8                 1658:array (
  0 => 0,
)	;0	<<2589
2592 1229  GOTO/253                  ?0        ?2153                ?1659               	;0
2593 1231  FE_RESET_R/77             $1154=    16?2                 ?2688               	;0
2594 1231  FE_FETCH_R/78             ?0        $1154                16?3                	;2688	>>2688	<<2687
2595 1233  NOP/0                     ?0        ?0                   ?0                  	;1	<<2683
2596 1233  GOTO/253                  ?0        ?2670                ?1660               	;0
2597 1236  FETCH_DIM_R/81            $1155=    16?3                 1661:'can_gen_e2'   	;0
2598 1236  JMPZ/43                   ?0        $1155                ?2601               	;0	>>2601
2599 1237  NOP/0                     ?0        ?0                   ?0                  	;1
2600 1237  GOTO/253                  ?0        ?2605                ?1662               	;0
2601 1239  ASSIGN_DIM/147            ?1124     16?3                 1663:'is_e2'        	;0	<<2598
2602 1239  OP_DATA/137               ?0        1664:0               ?0                  	;0
2603 1240  NOP/0                     ?0        ?0                   ?0                  	;1
2604 1240  GOTO/253                  ?0        ?2609                ?1665               	;0
2605 1242  NOP/0                     ?0        ?0                   ?0                  	;1
2606 1242  GOTO/253                  ?0        ?2607                ?1666               	;0
2607 1244  ASSIGN_DIM/147            ?1125     16?3                 1667:'is_e2'        	;0
2608 1244  OP_DATA/137               ?0        1668:1               ?0                  	;0
2609 1246  FETCH_DIM_R/81            $1158=    16?3                 1669:'only_mag'     	;0
2610 1246  JMPNZ_EX/47               #1159=    $1158                ?2613               	;0	>>2613
2611 1246  FETCH_DIM_R/81            $1160=    16?3                 1670:'only_e2'      	;0
2612 1246  BOOL/52                   #1159=    $1160                ?0                  	;0
2613 1246  JMPZ/43                   ?0        #1159                ?2616               	;0	>>2616	<<2610
2614 1247  NOP/0                     ?0        ?0                   ?0                  	;1
2615 1247  GOTO/253                  ?0        ?2648                ?1671               	;0
2616 1249  ASSIGN_DIM/147            ?1129     16?3                 1672:'is_line'      	;0	<<2613
2617 1249  OP_DATA/137               ?0        1673:1               ?0                  	;0
2618 1250  NOP/0                     ?0        ?0                   ?0                  	;1
2619 1250  GOTO/253                  ?0        ?2650                ?1674               	;0
2620 1251  NOP/0                     ?0        ?0                   ?0                  	;1
2621 1251  GOTO/253                  ?0        ?2648                ?1675               	;0
2622 1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   1676:'count'        	;1
2623 1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   1678:'json_decode'  	;2
2624 1253  FETCH_DIM_FUNC_ARG/93     $1162=    16?3                 1680:'output_formats'	;1
2625 1253  SEND_VAR_EX/66            ?80       $1162                ?1                  	;0
2626 1253  SEND_VAL_EX/116           ?96       1681:true            ?2                  	;0
2627 1253  DO_FCALL_BY_NAME/131      $1163=    ?0                   ?0                  	;0
2628 1253  SEND_VAR_NO_REF_EX/50     ?80       $1163                ?1                  	;0
2629 1253  DO_FCALL_BY_NAME/131      $1164=    ?0                   ?0                  	;0
2630 1253  IS_EQUAL/17               #1165=    $1164                1682:0              	;0
2631 1253  BOOL_NOT/13               #1166=    #1165                ?0                  	;0
2632 1253  JMPZ/43                   ?0        #1166                ?2635               	;0	>>2635
2633 1254  NOP/0                     ?0        ?0                   ?0                  	;1
2634 1254  GOTO/253                  ?0        ?2637                ?1683               	;0
2635 1256  ASSIGN_DIM/147            ?1135     16?3                 1684:'output_formats'	;0	<<2632
2636 1256  OP_DATA/137               ?0        1685:'[1,2,3]'       ?0                  	;0
2637 1258  INIT_FCALL_BY_NAME/59     ?0        ?0                   1686:'c73ED8D0b70CE12F'	;2
2638 1258  SEND_VAL_EX/116           ?80       1688:'users_packages' ?1                  	;0
2639 1258  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2640 1258  DO_FCALL_BY_NAME/131      $1168=    ?0                   ?0                  	;0
2641 1258  ASSIGN/38                 ?1137     16?3                 $1168               	;0
2642 1259  INIT_FCALL_BY_NAME/59     ?0        ?0                   1689:'c483A3a59265139e'	;1
2643 1259  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2644 1259  DO_FCALL_BY_NAME/131      $1170=    ?0                   ?0                  	;0
2645 1259  ASSIGN/38                 ?1139     16?4                 $1170               	;0
2646 1260  NOP/0                     ?0        ?0                   ?0                  	;1
2647 1260  GOTO/253                  ?0        ?2656                ?1691               	;0
2648 1263  ASSIGN_DIM/147            ?1140     16?3                 1692:'is_line'      	;0
2649 1263  OP_DATA/137               ?0        1693:0               ?0                  	;0
2650 1265  ASSIGN_DIM/147            ?1141     16?3                 1694:'lock_device'  	;0
2651 1265  OP_DATA/137               ?0        1695:1               ?0                  	;0
2652 1266  ASSIGN_DIM/147            ?1142     16?3                 1696:'check_compatible'	;0
2653 1266  OP_DATA/137               ?0        1697:1               ?0                  	;0
2654 1267  NOP/0                     ?0        ?0                   ?0                  	;1
2655 1267  GOTO/253                  ?0        ?2622                ?1698               	;0
2656 1269  FETCH_DIM_R/81            $1175=    16?4                 1699:'columns'      	;0
2657 1269  CONCAT/8                  #1176=    1700:'INSERT INTO `users_packages`(' $1175               	;0
2658 1269  CONCAT/8                  #1177=    #1176                1701:') VALUES('    	;0
2659 1269  FETCH_DIM_R/81            $1178=    16?4                 1702:'placeholder'  	;0
2660 1269  CONCAT/8                  #1179=    #1177                $1178               	;0
2661 1269  CONCAT/8                  #1180=    #1179                1703:');'           	;0
2662 1269  ASSIGN/38                 ?1149     16?5                 #1180               	;0
2663 1270  INIT_METHOD_CALL/112      ?0        16?6                 1704:'query'        	;1
2664 1270  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2665 1270  FETCH_DIM_R/81            $1182=    16?4                 1706:'data'         	;0
2666 1270  SEND_UNPACK/165           ?80       $1182                ?1                  	;0
2667 1270  DO_FCALL/60               ?1151     ?0                   ?0                  	;0
2668 1271  NOP/0                     ?0        ?0                   ?0                  	;1
2669 1271  GOTO/253                  ?0        ?2682                ?1707               	;0
2670 1273  FETCH_DIM_R/81            $1184=    16?3                 1708:'can_gen_mag'  	;0
2671 1273  JMPZ/43                   ?0        $1184                ?2674               	;0	>>2674
2672 1274  NOP/0                     ?0        ?0                   ?0                  	;1
2673 1274  GOTO/253                  ?0        ?2678                ?1709               	;0
2674 1276  ASSIGN_DIM/147            ?1153     16?3                 1710:'is_mag'       	;0	<<2671
2675 1276  OP_DATA/137               ?0        1711:0               ?0                  	;0
2676 1277  NOP/0                     ?0        ?0                   ?0                  	;1
2677 1277  GOTO/253                  ?0        ?2597                ?1712               	;0
2678 1279  ASSIGN_DIM/147            ?1154     16?3                 1713:'is_mag'       	;0
2679 1279  OP_DATA/137               ?0        1714:1               ?0                  	;0
2680 1280  NOP/0                     ?0        ?0                   ?0                  	;1
2681 1280  GOTO/253                  ?0        ?2597                ?1715               	;0
2682 1281  JMP/42                    ?0        ?2687                ?0                  	;0	>>2687
2683 1282  CATCH/107                 ?1        1716:'Exception'     16?7                	;0 CB	>>2687,2595
2684 1283  CONCAT/8                  #1187=    1718:'Error: '       16?7                	;0
2685 1283  CONCAT/8                  #1188=    #1187                1719:'
'            	;0
2686 1283  ECHO/40                   ?0        #1188                ?0                  	;0
2687 1285  JMP/42                    ?0        ?2594                ?0                  	;0	>>2594	<<2682,2683
2688 1285  FE_FREE/127               ?0        $1154                ?0                  	;0	<<2593
2689 1290  INIT_FCALL_BY_NAME/59     ?0        ?0                   1720:'in_array'     	;2
2690 1290  SEND_VAL_EX/116           ?80       1722:'rtmp_ips'      ?1                  	;0
2691 1290  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2692 1290  DO_FCALL_BY_NAME/131      $1189=    ?0                   ?0                  	;0
2693 1290  BOOL_NOT/13               #1190=    $1189                ?0                  	;0
2694 1290  JMPZ/43                   ?0        #1190                ?2696               	;0	>>2696
2695 1291  GOTO/253                  ?0        ?2568                ?1723               	;0
2696 1293  GOTO/253                  ?0        ?2307                ?1724               	;0	<<2694
2697 1295  IS_SMALLER/19             #1191=    1725:0               16?11               	;0
2698 1295  BOOL_NOT/13               #1192=    #1191                ?0                  	;0
2699 1295  JMPZ/43                   ?0        #1192                ?2701               	;0	>>2701
2700 1296  GOTO/253                  ?0        ?659                 ?1726               	;0
2701 1298  INIT_METHOD_CALL/112      ?0        16?6                 1727:'query'        	;1	<<2699
2702 1298  SEND_VAL_EX/116           ?80       1729:'TRUNCATE `streams_servers`;' ?1                  	;0
2703 1298  DO_FCALL/60               ?1161     ?0                   ?0                  	;0
2704 1299  INIT_FCALL_BY_NAME/59     ?0        ?0                   1730:'number_format'	;2
2705 1299  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
2706 1299  SEND_VAL_EX/116           ?96       1732:0               ?2                  	;0
2707 1299  DO_FCALL_BY_NAME/131      $1194=    ?0                   ?0                  	;0
2708 1299  CONCAT/8                  #1195=    1733:'Allocating '   $1194               	;0
2709 1299  CONCAT/8                  #1196=    #1195                1734:' streams to servers.
'	;0
2710 1299  ECHO/40                   ?0        #1196                ?0                  	;0
2711 1300  INIT_FCALL_BY_NAME/59     ?0        ?0                   1735:'range'        	;3
2712 1300  SEND_VAL_EX/116           ?80       1737:0               ?1                  	;0
2713 1300  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
2714 1300  SEND_VAL_EX/116           ?112      1738:1000            ?3                  	;0
2715 1300  DO_FCALL_BY_NAME/131      $1197=    ?0                   ?0                  	;0
2716 1300  ASSIGN/38                 ?1166     16?8                 $1197               	;0
2717 1301  JMPZ/43                   ?0        16?8                 ?2719               	;0	>>2719
2718 1302  GOTO/253                  ?0        ?569                 ?1739               	;0
2719 1304  GOTO/253                  ?0        ?568                 ?1740               	;0	<<2717
2720 1306  JMPZ/43                   ?0        16?8                 ?2722               	;0	>>2722
2721 1307  GOTO/253                  ?0        ?2723                ?1741               	;0
2722 1309  ASSIGN/38                 ?1167     16?8                 1742:array (
  0 => 0,
)	;0	<<2720
2723 1311  FE_RESET_R/77             $1200=    16?8                 ?2767               	;0
2724 1311  FE_FETCH_R/78             ?0        $1200                16?9                	;2767	>>2767	<<2766
2725 1313  INIT_METHOD_CALL/112      ?0        16?0                 1743:'query'        	;1	<<2762
2726 1313  CONCAT/8                  #1201=    1745:'SELECT * FROM `series_episodes` LIMIT ' 16?9                	;0
2727 1313  CONCAT/8                  #1202=    #1201                1746:', 1000;'      	;0
2728 1313  SEND_VAL_EX/116           ?80       #1202                ?1                  	;0
2729 1313  DO_FCALL/60               ?1171     ?0                   ?0                  	;0
2730 1314  INIT_METHOD_CALL/112      ?0        16?0                 1747:'get_rows'     	;0
2731 1314  DO_FCALL/60               $1204=    ?0                   ?0                  	;0
2732 1314  ASSIGN/38                 ?1173     16?2                 $1204               	;0
2733 1315  FE_RESET_R/77             $1206=    16?2                 ?2760               	;0
2734 1315  FE_FETCH_R/78             ?0        $1206                16?3                	;2760	>>2760	<<2759
2735 1316  FETCH_DIM_R/81            $1208=    16?3                 1750:'sort'         	;0
2736 1316  ASSIGN_DIM/147            ?1175     16?3                 1749:'episode_num'  	;0
2737 1316  OP_DATA/137               ?0        $1208                ?0                  	;0
2738 1317  INIT_FCALL_BY_NAME/59     ?0        ?0                   1751:'C73ed8d0b70CE12f'	;2
2739 1317  SEND_VAL_EX/116           ?80       1753:'streams_episodes' ?1                  	;0
2740 1317  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2741 1317  DO_FCALL_BY_NAME/131      $1209=    ?0                   ?0                  	;0
2742 1317  ASSIGN/38                 ?1178     16?3                 $1209               	;0
2743 1318  INIT_FCALL_BY_NAME/59     ?0        ?0                   1754:'c483A3A59265139E'	;1
2744 1318  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2745 1318  DO_FCALL_BY_NAME/131      $1211=    ?0                   ?0                  	;0
2746 1318  ASSIGN/38                 ?1180     16?4                 $1211               	;0
2747 1319  FETCH_DIM_R/81            $1213=    16?4                 1756:'columns'      	;0
2748 1319  CONCAT/8                  #1214=    1757:'INSERT INTO `streams_episodes`(' $1213               	;0
2749 1319  CONCAT/8                  #1215=    #1214                1758:') VALUES('    	;0
2750 1319  FETCH_DIM_R/81            $1216=    16?4                 1759:'placeholder'  	;0
2751 1319  CONCAT/8                  #1217=    #1215                $1216               	;0
2752 1319  CONCAT/8                  #1218=    #1217                1760:');'           	;0
2753 1319  ASSIGN/38                 ?1187     16?5                 #1218               	;0
2754 1320  INIT_METHOD_CALL/112      ?0        16?6                 1761:'query'        	;1
2755 1320  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2756 1320  FETCH_DIM_R/81            $1220=    16?4                 1763:'data'         	;0
2757 1320  SEND_UNPACK/165           ?80       $1220                ?1                  	;0
2758 1320  DO_FCALL/60               ?1189     ?0                   ?0                  	;0
2759 1321  JMP/42                    ?0        ?2734                ?0                  	;0	>>2734
2760 1321  FE_FREE/127               ?0        $1206                ?0                  	;0	<<2733
2761 1323  JMP/42                    ?0        ?2766                ?0                  	;0	>>2766
2762 1324  CATCH/107                 ?1        1764:'Exception'     16?7                	;0 CB	>>2766,2725
2763 1325  CONCAT/8                  #1222=    1766:'Error: '       16?7                	;0
2764 1325  CONCAT/8                  #1223=    #1222                1767:'
'            	;0
2765 1325  ECHO/40                   ?0        #1223                ?0                  	;0
2766 1327  JMP/42                    ?0        ?2724                ?0                  	;0	>>2724	<<2761,2762
2767 1327  FE_FREE/127               ?0        $1200                ?0                  	;0	<<2723
2768 1330  GOTO/253                  ?0        ?59                  ?1768               	;0
2769 1333  ASSIGN/38                 ?1192     16?10                1769:array (
)      	;0
2770 1334  INIT_FCALL_BY_NAME/59     ?0        ?0                   1770:'in_array'     	;2
2771 1334  SEND_VAL_EX/116           ?80       1772:'user_output'   ?1                  	;0
2772 1334  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
2773 1334  DO_FCALL_BY_NAME/131      $1225=    ?0                   ?0                  	;0
2774 1334  BOOL_NOT/13               #1226=    $1225                ?0                  	;0
2775 1334  JMPZ/43                   ?0        #1226                ?2777               	;0	>>2777
2776 1335  GOTO/253                  ?0        ?2360                ?1773               	;0
2777 1337  INIT_METHOD_CALL/112      ?0        16?0                 1774:'query'        	;1	<<2775
2778 1337  SEND_VAL_EX/116           ?80       1776:'SELECT COUNT(*) AS `count` FROM `user_output`;' ?1                  	;0
2779 1337  DO_FCALL/60               ?1195     ?0                   ?0                  	;0
2780 1338  INIT_METHOD_CALL/112      ?0        16?0                 1777:'get_row'      	;0
2781 1338  DO_FCALL/60               $1228=    ?0                   ?0                  	;0
2782 1338  FETCH_DIM_R/81            $1229=    $1228                1779:'count'        	;0
2783 1338  ASSIGN/38                 ?1198     16?11                $1229               	;0
2784 1339  GOTO/253                  ?0        ?3057                ?1780               	;0
2785 1341  INIT_METHOD_CALL/112      ?0        16?0                 1781:'query'        	;1
2786 1341  SEND_VAL_EX/116           ?80       1783:'SELECT COUNT(*) AS `count` FROM `series`;' ?1                  	;0
2787 1341  DO_FCALL/60               ?1199     ?0                   ?0                  	;0
2788 1342  INIT_METHOD_CALL/112      ?0        16?0                 1784:'get_row'      	;0
2789 1342  DO_FCALL/60               $1232=    ?0                   ?0                  	;0
2790 1342  FETCH_DIM_R/81            $1233=    $1232                1786:'count'        	;0
2791 1342  ASSIGN/38                 ?1202     16?11                $1233               	;0
2792 1343  IS_SMALLER/19             #1235=    1787:0               16?11               	;0
2793 1343  BOOL_NOT/13               #1236=    #1235                ?0                  	;0
2794 1343  JMPZ/43                   ?0        #1236                ?2796               	;0	>>2796
2795 1344  GOTO/253                  ?0        ?1132                ?1788               	;0
2796 1346  INIT_METHOD_CALL/112      ?0        16?6                 1789:'query'        	;1	<<2794
2797 1346  SEND_VAL_EX/116           ?80       1791:'TRUNCATE `streams_series`;' ?1                  	;0
2798 1346  DO_FCALL/60               ?1205     ?0                   ?0                  	;0
2799 1347  INIT_FCALL_BY_NAME/59     ?0        ?0                   1792:'number_format'	;2
2800 1347  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
2801 1347  SEND_VAL_EX/116           ?96       1794:0               ?2                  	;0
2802 1347  DO_FCALL_BY_NAME/131      $1238=    ?0                   ?0                  	;0
2803 1347  CONCAT/8                  #1239=    1795:'Adding '       $1238               	;0
2804 1347  CONCAT/8                  #1240=    #1239                1796:' TV series.
' 	;0
2805 1347  ECHO/40                   ?0        #1240                ?0                  	;0
2806 1348  GOTO/253                  ?0        ?2920                ?1797               	;0
2807 1350  INIT_METHOD_CALL/112      ?0        16?6                 1798:'query'        	;1
2808 1350  SEND_VAL_EX/116           ?80       1800:'TRUNCATE `profiles`;' ?1                  	;0
2809 1350  DO_FCALL/60               ?1209     ?0                   ?0                  	;0
2810 1351  INIT_FCALL_BY_NAME/59     ?0        ?0                   1801:'number_format'	;2
2811 1351  INIT_FCALL_BY_NAME/59     ?0        ?0                   1803:'count'        	;1
2812 1351  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2813 1351  DO_FCALL_BY_NAME/131      $1242=    ?0                   ?0                  	;0
2814 1351  SEND_VAR_NO_REF_EX/50     ?80       $1242                ?1                  	;0
2815 1351  SEND_VAL_EX/116           ?96       1805:0               ?2                  	;0
2816 1351  DO_FCALL_BY_NAME/131      $1243=    ?0                   ?0                  	;0
2817 1351  CONCAT/8                  #1244=    1806:'Generating '   $1243               	;0
2818 1351  CONCAT/8                  #1245=    #1244                1807:' transcoding profiles.
'	;0
2819 1351  ECHO/40                   ?0        #1245                ?0                  	;0
2820 1352  FE_RESET_R/77             $1246=    16?2                 ?2849               	;0
2821 1352  FE_FETCH_R/78             ?0        $1246                16?3                	;2849	>>2849	<<2848
2822 1354  INIT_FCALL_BY_NAME/59     ?0        ?0                   1808:'c73ed8D0B70ce12F'	;2	<<2844
2823 1354  SEND_VAL_EX/116           ?80       1810:'profiles'      ?1                  	;0
2824 1354  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2825 1354  DO_FCALL_BY_NAME/131      $1247=    ?0                   ?0                  	;0
2826 1354  ASSIGN/38                 ?1216     16?3                 $1247               	;0
2827 1355  INIT_FCALL_BY_NAME/59     ?0        ?0                   1811:'c483A3a59265139e'	;1
2828 1355  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2829 1355  DO_FCALL_BY_NAME/131      $1249=    ?0                   ?0                  	;0
2830 1355  ASSIGN/38                 ?1218     16?4                 $1249               	;0
2831 1356  FETCH_DIM_R/81            $1251=    16?4                 1813:'columns'      	;0
2832 1356  CONCAT/8                  #1252=    1814:'INSERT INTO `profiles`(' $1251               	;0
2833 1356  CONCAT/8                  #1253=    #1252                1815:') VALUES('    	;0
2834 1356  FETCH_DIM_R/81            $1254=    16?4                 1816:'placeholder'  	;0
2835 1356  CONCAT/8                  #1255=    #1253                $1254               	;0
2836 1356  CONCAT/8                  #1256=    #1255                1817:');'           	;0
2837 1356  ASSIGN/38                 ?1225     16?5                 #1256               	;0
2838 1357  INIT_METHOD_CALL/112      ?0        16?6                 1818:'query'        	;1
2839 1357  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2840 1357  FETCH_DIM_R/81            $1258=    16?4                 1820:'data'         	;0
2841 1357  SEND_UNPACK/165           ?80       $1258                ?1                  	;0
2842 1357  DO_FCALL/60               ?1227     ?0                   ?0                  	;0
2843 1357  JMP/42                    ?0        ?2848                ?0                  	;0	>>2848
2844 1358  CATCH/107                 ?1        1821:'Exception'     16?7                	;0 CB	>>2848,2822
2845 1359  CONCAT/8                  #1260=    1823:'Error: '       16?7                	;0
2846 1359  CONCAT/8                  #1261=    #1260                1824:'
'            	;0
2847 1359  ECHO/40                   ?0        #1261                ?0                  	;0
2848 1361  JMP/42                    ?0        ?2821                ?0                  	;0	>>2821	<<2843,2844
2849 1361  FE_FREE/127               ?0        $1246                ?0                  	;0	<<2820
2850 1365  GOTO/253                  ?0        ?2769                ?1825               	;0
2851 1367  ASSIGN/38                 ?1230     16?8                 1826:array (
  0 => 0,
)	;0
2852 1369  FE_RESET_R/77             $1263=    16?8                 ?2893               	;0
2853 1369  FE_FETCH_R/78             ?0        $1263                16?9                	;2893	>>2893	<<2892
2854 1371  INIT_METHOD_CALL/112      ?0        16?0                 1827:'query'        	;1	<<2888
2855 1371  CONCAT/8                  #1264=    1829:'SELECT * FROM `members` LIMIT ' 16?9                	;0
2856 1371  CONCAT/8                  #1265=    #1264                1830:', 1000;'      	;0
2857 1371  SEND_VAL_EX/116           ?80       #1265                ?1                  	;0
2858 1371  DO_FCALL/60               ?1234     ?0                   ?0                  	;0
2859 1372  INIT_METHOD_CALL/112      ?0        16?0                 1831:'get_rows'     	;0
2860 1372  DO_FCALL/60               $1267=    ?0                   ?0                  	;0
2861 1372  ASSIGN/38                 ?1236     16?2                 $1267               	;0
2862 1373  FE_RESET_R/77             $1269=    16?2                 ?2886               	;0
2863 1373  FE_FETCH_R/78             ?0        $1269                16?3                	;2886	>>2886	<<2885
2864 1374  INIT_FCALL_BY_NAME/59     ?0        ?0                   1833:'C73ED8D0b70cE12f'	;2
2865 1374  SEND_VAL_EX/116           ?80       1835:'users'         ?1                  	;0
2866 1374  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2867 1374  DO_FCALL_BY_NAME/131      $1270=    ?0                   ?0                  	;0
2868 1374  ASSIGN/38                 ?1239     16?3                 $1270               	;0
2869 1375  INIT_FCALL_BY_NAME/59     ?0        ?0                   1836:'c483a3a59265139E'	;1
2870 1375  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2871 1375  DO_FCALL_BY_NAME/131      $1272=    ?0                   ?0                  	;0
2872 1375  ASSIGN/38                 ?1241     16?4                 $1272               	;0
2873 1376  FETCH_DIM_R/81            $1274=    16?4                 1838:'columns'      	;0
2874 1376  CONCAT/8                  #1275=    1839:'INSERT INTO `users`(' $1274               	;0
2875 1376  CONCAT/8                  #1276=    #1275                1840:') VALUES('    	;0
2876 1376  FETCH_DIM_R/81            $1277=    16?4                 1841:'placeholder'  	;0
2877 1376  CONCAT/8                  #1278=    #1276                $1277               	;0
2878 1376  CONCAT/8                  #1279=    #1278                1842:');'           	;0
2879 1376  ASSIGN/38                 ?1248     16?5                 #1279               	;0
2880 1377  INIT_METHOD_CALL/112      ?0        16?6                 1843:'query'        	;1
2881 1377  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2882 1377  FETCH_DIM_R/81            $1281=    16?4                 1845:'data'         	;0
2883 1377  SEND_UNPACK/165           ?80       $1281                ?1                  	;0
2884 1377  DO_FCALL/60               ?1250     ?0                   ?0                  	;0
2885 1378  JMP/42                    ?0        ?2863                ?0                  	;0	>>2863
2886 1378  FE_FREE/127               ?0        $1269                ?0                  	;0	<<2862
2887 1380  JMP/42                    ?0        ?2892                ?0                  	;0	>>2892
2888 1381  CATCH/107                 ?1        1846:'Exception'     16?7                	;0 CB	>>2892,2854
2889 1382  CONCAT/8                  #1283=    1848:'Error: '       16?7                	;0
2890 1382  CONCAT/8                  #1284=    #1283                1849:'
'            	;0
2891 1382  ECHO/40                   ?0        #1284                ?0                  	;0
2892 1384  JMP/42                    ?0        ?2853                ?0                  	;0	>>2853	<<2887,2888
2893 1384  FE_FREE/127               ?0        $1263                ?0                  	;0	<<2852
2894 1388  GOTO/253                  ?0        ?2447                ?1850               	;0
2895 1390  INIT_METHOD_CALL/112      ?0        16?0                 1851:'get_rows'     	;0
2896 1390  DO_FCALL/60               $1285=    ?0                   ?0                  	;0
2897 1390  ASSIGN/38                 ?1254     16?2                 $1285               	;0
2898 1391  INIT_FCALL_BY_NAME/59     ?0        ?0                   1853:'count'        	;1
2899 1391  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2900 1391  DO_FCALL_BY_NAME/131      $1287=    ?0                   ?0                  	;0
2901 1391  IS_SMALLER/19             #1288=    1855:0               $1287               	;0
2902 1391  BOOL_NOT/13               #1289=    #1288                ?0                  	;0
2903 1391  JMPZ/43                   ?0        #1289                ?2905               	;0	>>2905
2904 1392  GOTO/253                  ?0        ?1596                ?1856               	;0
2905 1394  ASSIGN/38                 ?1258     16?14                1857:false          	;0	<<2903
2906 1395  INIT_METHOD_CALL/112      ?0        16?6                 1858:'query'        	;1
2907 1395  SEND_VAL_EX/116           ?80       1860:'TRUNCATE `servers`;' ?1                  	;0
2908 1395  DO_FCALL/60               ?1259     ?0                   ?0                  	;0
2909 1396  INIT_FCALL_BY_NAME/59     ?0        ?0                   1861:'number_format'	;2
2910 1396  INIT_FCALL_BY_NAME/59     ?0        ?0                   1863:'count'        	;1
2911 1396  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
2912 1396  DO_FCALL_BY_NAME/131      $1292=    ?0                   ?0                  	;0
2913 1396  SEND_VAR_NO_REF_EX/50     ?80       $1292                ?1                  	;0
2914 1396  SEND_VAL_EX/116           ?96       1865:0               ?2                  	;0
2915 1396  DO_FCALL_BY_NAME/131      $1293=    ?0                   ?0                  	;0
2916 1396  CONCAT/8                  #1294=    1866:'Moving '       $1293               	;0
2917 1396  CONCAT/8                  #1295=    #1294                1867:' servers.
'   	;0
2918 1396  ECHO/40                   ?0        #1295                ?0                  	;0
2919 1397  GOTO/253                  ?0        ?1529                ?1868               	;0
2920 1399  INIT_FCALL_BY_NAME/59     ?0        ?0                   1869:'range'        	;3
2921 1399  SEND_VAL_EX/116           ?80       1871:0               ?1                  	;0
2922 1399  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
2923 1399  SEND_VAL_EX/116           ?112      1872:1000            ?3                  	;0
2924 1399  DO_FCALL_BY_NAME/131      $1296=    ?0                   ?0                  	;0
2925 1399  ASSIGN/38                 ?1265     16?8                 $1296               	;0
2926 1400  JMPZ/43                   ?0        16?8                 ?2928               	;0	>>2928
2927 1401  GOTO/253                  ?0        ?2929                ?1873               	;0
2928 1403  ASSIGN/38                 ?1266     16?8                 1874:array (
  0 => 0,
)	;0	<<2926
2929 1405  FE_RESET_R/77             $1299=    16?8                 ?2990               	;0
2930 1405  FE_FETCH_R/78             ?0        $1299                16?9                	;2990	>>2990	<<2989
2931 1407  INIT_METHOD_CALL/112      ?0        16?0                 1875:'query'        	;1	<<2985
2932 1407  CONCAT/8                  #1300=    1877:'SELECT * FROM `series` LIMIT ' 16?9                	;0
2933 1407  CONCAT/8                  #1301=    #1300                1878:', 1000;'      	;0
2934 1407  SEND_VAL_EX/116           ?80       #1301                ?1                  	;0
2935 1407  DO_FCALL/60               ?1270     ?0                   ?0                  	;0
2936 1408  INIT_METHOD_CALL/112      ?0        16?0                 1879:'get_rows'     	;0
2937 1408  DO_FCALL/60               $1303=    ?0                   ?0                  	;0
2938 1408  ASSIGN/38                 ?1272     16?2                 $1303               	;0
2939 1409  FE_RESET_R/77             $1305=    16?2                 ?2983               	;0
2940 1409  FE_FETCH_R/78             ?0        $1305                16?3                	;2983	>>2983	<<2982
2941 1410  INIT_FCALL_BY_NAME/59     ?0        ?0                   1882:'intval'       	;1
2942 1410  FETCH_DIM_FUNC_ARG/93     $1307=    16?3                 1884:'category_id'  	;1
2943 1410  SEND_VAR_EX/66            ?80       $1307                ?1                  	;0
2944 1410  DO_FCALL_BY_NAME/131      $1308=    ?0                   ?0                  	;0
2945 1410  CONCAT/8                  #1309=    1885:'['             $1308               	;0
2946 1410  CONCAT/8                  #1310=    #1309                1886:']'            	;0
2947 1410  ASSIGN_DIM/147            ?1274     16?3                 1881:'category_id'  	;0
2948 1410  OP_DATA/137               ?0        #1310                ?0                  	;0
2949 1411  FETCH_DIM_R/81            $1312=    16?3                 1888:'releaseDate'  	;0
2950 1411  ASSIGN_DIM/147            ?1279     16?3                 1887:'release_date' 	;0
2951 1411  OP_DATA/137               ?0        $1312                ?0                  	;0
2952 1412  FETCH_DIM_R/81            $1313=    16?3                 1889:'tmdb_id'      	;0
2953 1412  IS_EQUAL/17               #1314=    $1313                1890:0              	;0
2954 1412  BOOL_NOT/13               #1315=    #1314                ?0                  	;0
2955 1412  JMPZ/43                   ?0        #1315                ?2959               	;0	>>2959
2956 1413  NOP/0                     ?0        ?0                   ?0                  	;1
2957 1413  NOP/0                     ?0        ?0                   ?0                  	;1
2958 1413  GOTO/253                  ?0        ?2961                ?1891               	;0
2959 1415  ASSIGN_DIM/147            ?1284     16?3                 1892:'tmdb_id'      	;0	<<2955
2960 1415  OP_DATA/137               ?0        1893:NULL            ?0                  	;0
2961 1417  INIT_FCALL_BY_NAME/59     ?0        ?0                   1894:'C73ED8d0B70Ce12f'	;2
2962 1417  SEND_VAL_EX/116           ?80       1896:'streams_series' ?1                  	;0
2963 1417  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
2964 1417  DO_FCALL_BY_NAME/131      $1317=    ?0                   ?0                  	;0
2965 1417  ASSIGN/38                 ?1286     16?3                 $1317               	;0
2966 1418  INIT_FCALL_BY_NAME/59     ?0        ?0                   1897:'c483A3a59265139E'	;1
2967 1418  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2968 1418  DO_FCALL_BY_NAME/131      $1319=    ?0                   ?0                  	;0
2969 1418  ASSIGN/38                 ?1288     16?4                 $1319               	;0
2970 1419  FETCH_DIM_R/81            $1321=    16?4                 1899:'columns'      	;0
2971 1419  CONCAT/8                  #1322=    1900:'INSERT IGNORE INTO `streams_series`(' $1321               	;0
2972 1419  CONCAT/8                  #1323=    #1322                1901:') VALUES('    	;0
2973 1419  FETCH_DIM_R/81            $1324=    16?4                 1902:'placeholder'  	;0
2974 1419  CONCAT/8                  #1325=    #1323                $1324               	;0
2975 1419  CONCAT/8                  #1326=    #1325                1903:');'           	;0
2976 1419  ASSIGN/38                 ?1295     16?5                 #1326               	;0
2977 1420  INIT_METHOD_CALL/112      ?0        16?6                 1904:'query'        	;1
2978 1420  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
2979 1420  FETCH_DIM_R/81            $1328=    16?4                 1906:'data'         	;0
2980 1420  SEND_UNPACK/165           ?80       $1328                ?1                  	;0
2981 1420  DO_FCALL/60               ?1297     ?0                   ?0                  	;0
2982 1421  JMP/42                    ?0        ?2940                ?0                  	;0	>>2940
2983 1421  FE_FREE/127               ?0        $1305                ?0                  	;0	<<2939
2984 1423  JMP/42                    ?0        ?2989                ?0                  	;0	>>2989
2985 1424  CATCH/107                 ?1        1907:'Exception'     16?7                	;0 CB	>>2989,2931
2986 1425  CONCAT/8                  #1330=    1909:'Error: '       16?7                	;0
2987 1425  CONCAT/8                  #1331=    #1330                1910:'
'            	;0
2988 1425  ECHO/40                   ?0        #1331                ?0                  	;0
2989 1427  JMP/42                    ?0        ?2930                ?0                  	;0	>>2930	<<2984,2985
2990 1427  FE_FREE/127               ?0        $1299                ?0                  	;0	<<2929
2991 1429  GOTO/253                  ?0        ?1132                ?1911               	;0
2992 1431  INIT_METHOD_CALL/112      ?0        16?0                 1912:'query'        	;1
2993 1431  SEND_VAL_EX/116           ?80       1914:'SELECT `id`, `type` FROM `streams`;' ?1                  	;0
2994 1431  DO_FCALL/60               ?1300     ?0                   ?0                  	;0
2995 1432  INIT_METHOD_CALL/112      ?0        16?0                 1915:'get_rows'     	;0
2996 1432  DO_FCALL/60               $1333=    ?0                   ?0                  	;0
2997 1432  ASSIGN/38                 ?1302     16?28                $1333               	;0
2998 1433  FE_RESET_R/77             $1335=    16?28                ?3011               	;0
2999 1433  FE_FETCH_R/78             ?0        $1335                16?29               	;3011	>>3011	<<3010
3000 1434  INIT_FCALL_BY_NAME/59     ?0        ?0                   1917:'intval'       	;1
3001 1434  FETCH_DIM_FUNC_ARG/93     $1336=    16?29                1919:'id'           	;1
3002 1434  SEND_VAR_EX/66            ?80       $1336                ?1                  	;0
3003 1434  DO_FCALL_BY_NAME/131      $1337=    ?0                   ?0                  	;0
3004 1434  INIT_FCALL_BY_NAME/59     ?0        ?0                   1920:'intval'       	;1
3005 1434  FETCH_DIM_FUNC_ARG/93     $1339=    16?29                1922:'type'         	;1
3006 1434  SEND_VAR_EX/66            ?80       $1339                ?1                  	;0
3007 1434  DO_FCALL_BY_NAME/131      $1340=    ?0                   ?0                  	;0
3008 1434  ASSIGN_DIM/147            ?1306     16?13                $1337               	;0
3009 1434  OP_DATA/137               ?0        $1340                ?0                  	;0
3010 1435  JMP/42                    ?0        ?2999                ?0                  	;0	>>2999
3011 1435  FE_FREE/127               ?0        $1335                ?0                  	;0	<<2998
3012 1438  INIT_METHOD_CALL/112      ?0        16?0                 1923:'query'        	;1
3013 1438  SEND_VAL_EX/116           ?80       1925:'SELECT `id` FROM `series`;' ?1                  	;0
3014 1438  DO_FCALL/60               ?1309     ?0                   ?0                  	;0
3015 1439  GOTO/253                  ?0        ?3033                ?1926               	;0
3016 1441  INIT_FCALL_BY_NAME/59     ?0        ?0                   1927:'number_format'	;2
3017 1441  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
3018 1441  SEND_VAL_EX/116           ?96       1929:0               ?2                  	;0
3019 1441  DO_FCALL_BY_NAME/131      $1342=    ?0                   ?0                  	;0
3020 1441  CONCAT/8                  #1343=    1930:'Adding '       $1342               	;0
3021 1441  CONCAT/8                  #1344=    #1343                1931:' streams.
'   	;0
3022 1441  ECHO/40                   ?0        #1344                ?0                  	;0
3023 1442  INIT_FCALL_BY_NAME/59     ?0        ?0                   1932:'range'        	;3
3024 1442  SEND_VAL_EX/116           ?80       1934:0               ?1                  	;0
3025 1442  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
3026 1442  SEND_VAL_EX/116           ?112      1935:1000            ?3                  	;0
3027 1442  DO_FCALL_BY_NAME/131      $1345=    ?0                   ?0                  	;0
3028 1442  ASSIGN/38                 ?1314     16?8                 $1345               	;0
3029 1443  JMPZ/43                   ?0        16?8                 ?3031               	;0	>>3031
3030 1444  GOTO/253                  ?0        ?3032                ?1936               	;0
3031 1446  ASSIGN/38                 ?1315     16?8                 1937:array (
  0 => 0,
)	;0	<<3029
3032 1448  GOTO/253                  ?0        ?660                 ?1938               	;0
3033 1450  INIT_METHOD_CALL/112      ?0        16?0                 1939:'get_rows'     	;0
3034 1450  DO_FCALL/60               $1348=    ?0                   ?0                  	;0
3035 1450  ASSIGN/38                 ?1317     16?20                $1348               	;0
3036 1451  FE_RESET_R/77             $1350=    16?20                ?3045               	;0
3037 1451  FE_FETCH_R/78             ?0        $1350                16?30               	;3045	>>3045	<<3044
3038 1452  INIT_FCALL_BY_NAME/59     ?0        ?0                   1941:'intval'       	;1
3039 1452  FETCH_DIM_FUNC_ARG/93     $1352=    16?30                1943:'id'           	;1
3040 1452  SEND_VAR_EX/66            ?80       $1352                ?1                  	;0
3041 1452  DO_FCALL_BY_NAME/131      $1353=    ?0                   ?0                  	;0
3042 1452  ASSIGN_DIM/147            ?1319     16?12                ?1668298144         	;0
3043 1452  OP_DATA/137               ?0        $1353                ?0                  	;0
3044 1453  JMP/42                    ?0        ?3037                ?0                  	;0	>>3037
3045 1453  FE_FREE/127               ?0        $1350                ?0                  	;0	<<3036
3046 1456  INIT_FCALL_BY_NAME/59     ?0        ?0                   1944:'in_array'     	;2
3047 1456  SEND_VAL_EX/116           ?80       1946:'reg_users'     ?1                  	;0
3048 1456  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
3049 1456  DO_FCALL_BY_NAME/131      $1354=    ?0                   ?0                  	;0
3050 1456  BOOL_NOT/13               #1355=    $1354                ?0                  	;0
3051 1456  JMPZ/43                   ?0        #1355                ?3053               	;0	>>3053
3052 1457  GOTO/253                  ?0        ?1936                ?1947               	;0
3053 1459  INIT_METHOD_CALL/112      ?0        16?0                 1948:'query'        	;1	<<3051
3054 1459  SEND_VAL_EX/116           ?80       1950:'SELECT COUNT(*) AS `count` FROM `reg_users`;' ?1                  	;0
3055 1459  DO_FCALL/60               ?1324     ?0                   ?0                  	;0
3056 1460  GOTO/253                  ?0        ?1086                ?1951               	;0
3057 1462  IS_SMALLER/19             #1357=    1952:0               16?11               	;0
3058 1462  BOOL_NOT/13               #1358=    #1357                ?0                  	;0
3059 1462  JMPZ/43                   ?0        #1358                ?3061               	;0	>>3061
3060 1463  GOTO/253                  ?0        ?2360                ?1953               	;0
3061 1465  INIT_FCALL_BY_NAME/59     ?0        ?0                   1954:'number_format'	;2	<<3059
3062 1465  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
3063 1465  SEND_VAL_EX/116           ?96       1956:0               ?2                  	;0
3064 1465  DO_FCALL_BY_NAME/131      $1359=    ?0                   ?0                  	;0
3065 1465  CONCAT/8                  #1360=    1957:'Attributing '  $1359               	;0
3066 1465  CONCAT/8                  #1361=    #1360                1958:' output options to lines.
'	;0
3067 1465  ECHO/40                   ?0        #1361                ?0                  	;0
3068 1466  INIT_FCALL_BY_NAME/59     ?0        ?0                   1959:'range'        	;3
3069 1466  SEND_VAL_EX/116           ?80       1961:0               ?1                  	;0
3070 1466  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
3071 1466  SEND_VAL_EX/116           ?112      1962:1000            ?3                  	;0
3072 1466  DO_FCALL_BY_NAME/131      $1362=    ?0                   ?0                  	;0
3073 1466  ASSIGN/38                 ?1331     16?8                 $1362               	;0
3074 1467  JMPZ/43                   ?0        16?8                 ?3076               	;0	>>3076
3075 1468  GOTO/253                  ?0        ?2334                ?1963               	;0
3076 1470  ASSIGN/38                 ?1332     16?8                 1964:array (
  0 => 0,
)	;0	<<3074
3077 1471  GOTO/253                  ?0        ?2334                ?1965               	;0
3078 1472  JMP/42                    ?0        ?3083                ?0                  	;0	>>3083
3079 1473  CATCH/107                 ?1        1966:'Exception'     16?7                	;0 CB	>>3083,58
3080 1474  CONCAT/8                  #1365=    1968:'Error: '       16?7                	;0
3081 1474  CONCAT/8                  #1366=    #1365                1969:'
'            	;0
3082 1474  ECHO/40                   ?0        #1366                ?0                  	;0
3083 1476  ECHO/40                   ?0        1970:'
Migration has been completed!

Your settings have been reset to the XUI default, please take some time to review the settings page and make the desired changes.
' ?0                  	;0	<<3078,3079
3084 1477  INIT_FCALL_BY_NAME/59     ?0        ?0                   1971:'file_put_contents'	;2
3085 1477  FETCH_CONSTANT/99         #1367=    ?0                   1973:'TMP_PATH'     	;16
3086 1477  CONCAT/8                  #1368=    #1367                1976:'.migration.status'	;0
3087 1477  SEND_VAL_EX/116           ?80       #1368                ?1                  	;0
3088 1477  SEND_VAL_EX/116           ?96       1977:2               ?2                  	;0
3089 1477  DO_FCALL_BY_NAME/131      ?1337     ?0                   ?0                  	;0
3090 1478  GOTO/253                  ?0        ?35                  ?1978               	;0
3091 1481  ASSIGN/38                 ?1338     16?26                1979:array (
  0 => 'reg_users',
  1 => 'users',
  2 => 'enigma2_devices',
  3 => 'mag_devices',
  4 => 'user_output',
  5 => 'streaming_servers',
  6 => 'series',
  7 => 'series_episodes',
  8 => 'streams',
  9 => 'streams_sys',
  10 => 'streams_options',
  11 => 'stream_categories',
  12 => 'bouquets',
  13 => 'member_groups',
  14 => 'packages',
  15 => 'rtmp_ips',
  16 => 'epg',
  17 => 'blocked_ips',
  18 => 'blocked_user_agents',
  19 => 'isp_addon',
  20 => 'tickets',
  21 => 'tickets_replies',
  22 => 'transcoding_profiles',
  23 => 'watch_folders',
  24 => 'categories',
  25 => 'epg_sources',
  26 => 'members',
  27 => 'blocked_isps',
  28 => 'groups',
  29 => 'servers',
  30 => 'stream_servers',
)	;0
3092 1482  INIT_FCALL_BY_NAME/59     ?0        ?0                   1980:'json_decode'  	;2
3093 1482  INIT_FCALL_BY_NAME/59     ?0        ?0                   1982:'file_get_contents'	;1
3094 1482  FETCH_CONSTANT/99         #1371=    ?0                   1984:'TMP_PATH'     	;16
3095 1482  CONCAT/8                  #1372=    #1371                1987:'.migration.options'	;0
3096 1482  SEND_VAL_EX/116           ?80       #1372                ?1                  	;0
3097 1482  DO_FCALL_BY_NAME/131      $1373=    ?0                   ?0                  	;0
3098 1482  SEND_VAR_NO_REF_EX/50     ?80       $1373                ?1                  	;0
3099 1482  SEND_VAL_EX/116           ?96       1988:true            ?2                  	;0
3100 1482  DO_FCALL_BY_NAME/131      $1374=    ?0                   ?0                  	;0
3101 1482  JMP_SET/152               #1375=    $1374                ?3103               	;0
3102 1482  QM_ASSIGN/22              #1375=    1989:array (
)       ?0                  	;0
3103 1482  ASSIGN/38                 ?1344     16?1                 #1375               	;0
3104 1483  INIT_FCALL_BY_NAME/59     ?0        ?0                   1990:'count'        	;1
3105 1483  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
3106 1483  DO_FCALL_BY_NAME/131      $1377=    ?0                   ?0                  	;0
3107 1483  IS_EQUAL/17               #1378=    $1377                1992:0              	;0
3108 1483  BOOL_NOT/13               #1379=    #1378                ?0                  	;0
3109 1483  JMPZ/43                   ?0        #1379                ?3111               	;0	>>3111
3110 1484  GOTO/253                  ?0        ?1                   ?1993               	;0
3111 1486  ASSIGN/38                 ?1348     16?1                 16?26               	;0	<<3109
3112 1487  GOTO/253                  ?0        ?1                   ?1994               	;0
3113 1489  INIT_FCALL_BY_NAME/59     ?0        ?0                   1995:'str_replace'  	;3	<<0
3114 1489  SEND_VAL_EX/116           ?80       1997:'\\'            ?1                  	;0
3115 1489  SEND_VAL_EX/116           ?96       1998:'/'             ?2                  	;0
3116 1489  INIT_FCALL_BY_NAME/59     ?0        ?0                   1999:'dirname'      	;1
3117 1489  FETCH_DIM_FUNC_ARG/93     $1381=    16?31                2001:0              	;1
3118 1489  SEND_VAR_EX/66            ?80       $1381                ?1                  	;0
3119 1489  DO_FCALL_BY_NAME/131      $1382=    ?0                   ?0                  	;0
3120 1489  SEND_VAR_NO_REF_EX/50     ?112      $1382                ?3                  	;0
3121 1489  DO_FCALL_BY_NAME/131      $1383=    ?0                   ?0                  	;0
3122 1489  CONCAT/8                  #1384=    $1383                2002:'/../../includes/admin.php'	;0
3123 1489  INCLUDE_OR_EVAL/73        ?1353     #1384                ?0                  	;8
3124 1490  INIT_FCALL_BY_NAME/59     ?0        ?0                   2003:'set_time_limit'	;1
3125 1490  SEND_VAL_EX/116           ?80       2005:0               ?1                  	;0
3126 1490  DO_FCALL_BY_NAME/131      ?1354     ?0                   ?0                  	;0
3127 1491  INIT_FCALL_BY_NAME/59     ?0        ?0                   2006:'ini_set'      	;2
3128 1491  SEND_VAL_EX/116           ?80       2008:'memory_limit'  ?1                  	;0
3129 1491  SEND_VAL_EX/116           ?96       2009:-1              ?2                  	;0
3130 1491  DO_FCALL_BY_NAME/131      ?1355     ?0                   ?0                  	;0
3131 1492  BEGIN_SILENCE/57          #1388=    ?0                   ?0                  	;0
3132 1492  FETCH_R/80                $1389=    2010:'argc'          ?0                  	;268435456
3133 1492  END_SILENCE/58            ?0        #1388                ?0                  	;0
3134 1492  JMPZ/43                   ?0        $1389                ?3136               	;0	>>3136
3135 1493  GOTO/253                  ?0        ?3091                ?2011               	;0
3136 1495  EXIT/79                   ?0        2012:0               ?0                  	;0	<<3134
3137 1496  GOTO/253                  ?0        ?3091                ?2013               	;0
3138 1499  NOP/0                     ?0        2014:1               ?0                  	;4294967295
*/

?>