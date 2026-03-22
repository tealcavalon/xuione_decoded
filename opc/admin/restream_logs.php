<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?43                  ?0                  	;0	>>43
1  5   ECHO/40                   ?0        1:'                    Your service is set up to detect restreaming without permission, however it won\'t automatically block IP addresses or lines.
                    ' ?0                  	;0
2  6   GOTO/253                  ?0        ?4                   ?2                  	;0
3  8   ECHO/40                   ?0        3:'                    Your service is set up to automatically block the lines of those detected restreaming without permission. IP\'s will not be automatically blocked.
                    ' ?0                  	;0
4  10  GOTO/253                  ?0        ?39                  ?4                  	;0
5  13  ECHO/40                   ?0        5:'                    Your service is set up to automatically block the lines and IP addresses of those detected restreaming without permission.
                    ' ?0                  	;0
6  15  ECHO/40                   ?0        6:'                </div>
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
7  16  FETCH_DIM_R/81            $2=       16?0                 7:'id'              	;0
8  16  ECHO/40                   ?0        $2                   ?0                  	;0
9  17  GOTO/253                  ?0        ?29                  ?8                  	;0
10 19  ASSIGN/38                 ?1        16?1                 9:'Restream Detection Logs'	;0
11 20  INCLUDE_OR_EVAL/73        ?2        10:'header.php'      ?0                  	;2
12 21  ECHO/40                   ?0        11:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
13 22  FETCH_IS/89               $5=       12:'_SERVER'         ?0                  	;0
14 22  ISSET_ISEMPTY_DIM_OBJ/115 #6=       $5                   13:'HTTP_X_REQUESTED_WITH'	;16777216
15 22  BOOL_NOT/13               #7=       #6                   ?0                  	;0
16 22  JMPZ_EX/46                #7=       #7                   ?24                 	;0	>>24
17 22  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'strtolower'     	;1
18 22  FETCH_FUNC_ARG/92         $8=       16:'_SERVER'         ?0                  	;1
19 22  FETCH_DIM_FUNC_ARG/93     $9=       $8                   17:'HTTP_X_REQUESTED_WITH'	;1
20 22  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
21 22  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
22 22  IS_EQUAL/17               #11=      $10                  18:'xmlhttprequest' 	;0
23 22  BOOL/52                   #7=       #11                  ?0                  	;0
24 22  BOOL_NOT/13               #12=      #7                   ?0                  	;0	<<16
25 22  JMPZ/43                   ?0        #12                  ?27                 	;0	>>27
26 23  GOTO/253                  ?0        ?61                  ?19                 	;0
27 25  ECHO/40                   ?0        20:' style="display: none;"' ?0                  	;0	<<25
28 26  GOTO/253                  ?0        ?61                  ?21                 	;0
29 28  ECHO/40                   ?0        22:'</th>
									<th>' ?0                  	;0
30 29  FETCH_DIM_R/81            $13=      16?0                 23:'username'       	;0
31 29  ECHO/40                   ?0        $13                  ?0                  	;0
32 30  ECHO/40                   ?0        24:'</th>
                                    <th>' ?0                  	;0
33 31  FETCH_DIM_R/81            $14=      16?0                 25:'stream'         	;0
34 31  ECHO/40                   ?0        $14                  ?0                  	;0
35 32  ECHO/40                   ?0        26:'</th>
									<th class="text-center">' ?0                  	;0
36 33  GOTO/253                  ?0        ?52                  ?27                 	;0
37 35  ECHO/40                   ?0        28:'</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
38 36  GOTO/253                  ?0        ?89                  ?29                 	;0
39 38  GOTO/253                  ?0        ?41                  ?30                 	;0
40 40  ECHO/40                   ?0        31:'                    Your service is set up to automatically block the IP addresses of those detected restreaming without permission. Lines will remain active.
                    ' ?0                  	;0
41 42  GOTO/253                  ?0        ?6                   ?32                 	;0
42 43  GOTO/253                  ?0        ?5                   ?33                 	;0
43 45  INCLUDE_OR_EVAL/73        ?13       34:'session.php'     ?0                  	;2	<<0
44 46  INCLUDE_OR_EVAL/73        ?14       35:'functions.php'   ?0                  	;2
45 47  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'E6d500e19634D513'	;0
46 47  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
47 47  JMPZ/43                   ?0        $17                  ?49                 	;0	>>49
48 48  GOTO/253                  ?0        ?51                  ?38                 	;0
49 50  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'e72F42A93714ba87'	;0	<<47
50 50  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
51 52  GOTO/253                  ?0        ?10                  ?41                 	;0
52 54  FETCH_DIM_R/81            $19=      16?0                 42:'ip'             	;0
53 54  ECHO/40                   ?0        $19                  ?0                  	;0
54 55  ECHO/40                   ?0        43:'</th>
                                    <th class="text-center">' ?0                  	;0
55 56  FETCH_DIM_R/81            $20=      16?0                 44:'date'           	;0
56 56  ECHO/40                   ?0        $20                  ?0                  	;0
57 57  ECHO/40                   ?0        45:'</th>
									<th class="text-center">' ?0                  	;0
58 58  FETCH_DIM_R/81            $21=      16?0                 46:'actions'        	;0
59 58  ECHO/40                   ?0        $21                  ?0                  	;0
60 59  GOTO/253                  ?0        ?37                  ?47                 	;0
61 62  ECHO/40                   ?0        48:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Restream Detection Logs</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
                <div class="alert alert-info" role="alert">
                    ' ?0                  	;0
62 63  FETCH_STATIC_PROP_R/173   $22=      49:'rSettings'       50:'XUI'            	;0
63 63  FETCH_DIM_R/81            $23=      $22                  52:'detect_restream_block_user'	;0
64 63  JMPZ_EX/46                #24=      $23                  ?68                 	;0	>>68
65 63  FETCH_STATIC_PROP_R/173   $25=      53:'rSettings'       54:'XUI'            	;0
66 63  FETCH_DIM_R/81            $26=      $25                  56:'detect_restream_block_ip'	;0
67 63  BOOL/52                   #24=      $26                  ?0                  	;0
68 63  JMPZ/43                   ?0        #24                  ?70                 	;0	>>70	<<64
69 64  GOTO/253                  ?0        ?5                   ?57                 	;0
70 66  FETCH_STATIC_PROP_R/173   $27=      58:'rSettings'       59:'XUI'            	;0	<<68
71 66  FETCH_DIM_R/81            $28=      $27                  61:'detect_restream_block_user'	;0
72 66  BOOL_NOT/13               #29=      $28                  ?0                  	;0
73 66  JMPZ_EX/46                #29=      #29                  ?77                 	;0	>>77
74 66  FETCH_STATIC_PROP_R/173   $30=      62:'rSettings'       63:'XUI'            	;0
75 66  FETCH_DIM_R/81            $31=      $30                  65:'detect_restream_block_ip'	;0
76 66  BOOL/52                   #29=      $31                  ?0                  	;0
77 66  JMPZ/43                   ?0        #29                  ?79                 	;0	>>79	<<73
78 67  GOTO/253                  ?0        ?40                  ?66                 	;0
79 69  FETCH_STATIC_PROP_R/173   $32=      67:'rSettings'       68:'XUI'            	;0	<<77
80 69  FETCH_DIM_R/81            $33=      $32                  70:'detect_restream_block_user'	;0
81 69  JMPZ_EX/46                #34=      $33                  ?86                 	;0	>>86
82 69  FETCH_STATIC_PROP_R/173   $35=      71:'rSettings'       72:'XUI'            	;0
83 69  FETCH_DIM_R/81            $36=      $35                  74:'detect_restream_block_ip'	;0
84 69  BOOL_NOT/13               #37=      $36                  ?0                  	;0
85 69  BOOL/52                   #34=      #37                  ?0                  	;0
86 69  JMPZ/43                   ?0        #34                  ?88                 	;0	>>88	<<81
87 70  GOTO/253                  ?0        ?3                   ?75                 	;0
88 72  GOTO/253                  ?0        ?1                   ?76                 	;0	<<86
89 74  INCLUDE_OR_EVAL/73        ?36       77:'footer.php'      ?0                  	;2
90 75  NOP/0                     ?0        78:1                 ?0                  	;4294967295
*/

?>