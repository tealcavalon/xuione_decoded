<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?13                  ?0                  	;0	>>13
1   6    ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
2   7    INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3   8    ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">RTMP IP Addresses</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
                ' ?0                  	;0
4   9    ISSET_ISEMPTY_CV/197      #5=       16?0                 ?0                  	;33554432
5   9    JMPZ_EX/46                #5=       #5                   ?9                  	;0	>>9
6   9    FETCH_CONSTANT/99         #6=       ?0                   4:'STATUS_SUCCESS'  	;16
7   9    IS_EQUAL/17               #7=       16?0                 #6                  	;0
8   9    BOOL/52                   #5=       #7                   ?0                  	;0
9   9    BOOL_NOT/13               #8=       #5                   ?0                  	;0	<<5
10  9    JMPZ/43                   ?0        #8                   ?12                 	;0	>>12
11  10   GOTO/253                  ?0        ?26                  ?7                  	;0
12  12   GOTO/253                  ?0        ?22                  ?8                  	;0	<<10
13  14   INCLUDE_OR_EVAL/73        ?5        9:'session.php'      ?0                  	;2	<<0
14  15   INCLUDE_OR_EVAL/73        ?6        10:'functions.php'   ?0                  	;2
15  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'e6D500E19634d513'	;0
16  16   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
17  16   JMPZ/43                   ?0        $11                  ?19                 	;0	>>19
18  17   GOTO/253                  ?0        ?21                  ?13                 	;0
19  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'E72F42a93714Ba87'	;0	<<17
20  19   DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
21  21   GOTO/253                  ?0        ?99                  ?16                 	;0
22  23   ECHO/40                   ?0        17:'                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    ' ?0                  	;0
23  24   FETCH_DIM_R/81            $13=      16?1                 18:'rtmp_success'   	;0
24  24   ECHO/40                   ?0        $13                  ?0                  	;0
25  25   ECHO/40                   ?0        19:'                </div>
                ' ?0                  	;0
26  27   ECHO/40                   ?0        20:'				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">IP Address</th>
                                    <th class="text-center">Password</th>
                                    <th class="text-center">Push</th>
                                    <th class="text-center">Pull</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								' ?0                  	;0
27  28   GOTO/253                  ?0        ?28                  ?21                 	;0
28  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'D5dE20BCa4dd43AB'	;0
29  30   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
30  30   FE_RESET_R/77             $15=      $14                  ?96                 	;0
31  30   FE_FETCH_R/78             ?0        $15                  16?2                	;96	>>96	<<95
32  31   NOP/0                     ?0        ?0                   ?0                  	;1
33  31   GOTO/253                  ?0        ?34                  ?24                 	;0
34  33   ECHO/40                   ?0        25:'								<tr id="ip-' ?0                  	;0
35  34   FETCH_DIM_R/81            $16=      16?2                 26:'id'             	;0
36  34   ECHO/40                   ?0        $16                  ?0                  	;0
37  35   ECHO/40                   ?0        27:'">
									<td class="text-center">' ?0                  	;0
38  36   FETCH_DIM_R/81            $17=      16?2                 28:'id'             	;0
39  36   ECHO/40                   ?0        $17                  ?0                  	;0
40  37   ECHO/40                   ?0        29:'</td>
									<td class="text-center">' ?0                  	;0
41  38   NOP/0                     ?0        ?0                   ?0                  	;1
42  38   GOTO/253                  ?0        ?77                  ?30                 	;0
43  40   ECHO/40                   ?0        31:', \'delete\');"><i class="mdi mdi-close"></i></button>
										</div>
									</td>
								</tr>
								' ?0                  	;0
44  42   NOP/0                     ?0        ?0                   ?0                  	;1
45  42   GOTO/253                  ?0        ?95                  ?32                 	;0
46  44   ECHO/40                   ?0        33:'                                    </td>
                                    <td class="text-center">
                                    ' ?0                  	;0
47  45   FETCH_DIM_R/81            $18=      16?2                 34:'pull'           	;0
48  45   JMPZ/43                   ?0        $18                  ?51                 	;0	>>51
49  46   NOP/0                     ?0        ?0                   ?0                  	;1
50  46   GOTO/253                  ?0        ?54                  ?35                 	;0
51  48   ECHO/40                   ?0        36:'<i class="text-secondary fas fa-square"></i>' ?0                  	;0	<<48
52  49   NOP/0                     ?0        ?0                   ?0                  	;1
53  49   GOTO/253                  ?0        ?57                  ?37                 	;0
54  51   NOP/0                     ?0        ?0                   ?0                  	;1
55  51   GOTO/253                  ?0        ?56                  ?38                 	;0
56  53   ECHO/40                   ?0        39:'<i class="text-success fas fa-square"></i>' ?0                  	;0
57  55   ECHO/40                   ?0        40:'                                    </td>
									<td class="text-center">
										<div class="btn-group">
											' ?0                  	;0
58  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'E589A4bF54a2DAD1'	;2
59  56   SEND_VAL_EX/116           ?80       43:'adv'             ?1                  	;0
60  56   SEND_VAL_EX/116           ?96       44:'add_rtmp'        ?2                  	;0
61  56   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
62  56   BOOL_NOT/13               #20=      $19                  ?0                  	;0
63  56   JMPZ/43                   ?0        #20                  ?66                 	;0	>>66
64  57   NOP/0                     ?0        ?0                   ?0                  	;1
65  57   GOTO/253                  ?0        ?72                  ?45                 	;0
66  59   ECHO/40                   ?0        46:'											<a href="./rtmp_ip?id=' ?0                  	;0	<<63
67  60   NOP/0                     ?0        ?0                   ?0                  	;1
68  60   GOTO/253                  ?0        ?69                  ?47                 	;0
69  62   FETCH_DIM_R/81            $21=      16?2                 48:'id'             	;0
70  62   ECHO/40                   ?0        $21                  ?0                  	;0
71  63   ECHO/40                   ?0        49:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>
											' ?0                  	;0
72  65   ECHO/40                   ?0        50:'											<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(' ?0                  	;0
73  66   FETCH_DIM_R/81            $22=      16?2                 51:'id'             	;0
74  66   ECHO/40                   ?0        $22                  ?0                  	;0
75  67   NOP/0                     ?0        ?0                   ?0                  	;1
76  67   GOTO/253                  ?0        ?43                  ?52                 	;0
77  69   FETCH_DIM_R/81            $23=      16?2                 53:'ip'             	;0
78  69   ECHO/40                   ?0        $23                  ?0                  	;0
79  70   ECHO/40                   ?0        54:'</td>
									<td class="text-center">' ?0                  	;0
80  71   FETCH_DIM_R/81            $24=      16?2                 55:'password'       	;0
81  71   ECHO/40                   ?0        $24                  ?0                  	;0
82  72   ECHO/40                   ?0        56:'</td>
                                    <td class="text-center">
                                    ' ?0                  	;0
83  73   FETCH_DIM_R/81            $25=      16?2                 57:'push'           	;0
84  73   JMPZ/43                   ?0        $25                  ?87                 	;0	>>87
85  74   NOP/0                     ?0        ?0                   ?0                  	;1
86  74   GOTO/253                  ?0        ?92                  ?58                 	;0
87  76   NOP/0                     ?0        ?0                   ?0                  	;1	<<84
88  76   GOTO/253                  ?0        ?89                  ?59                 	;0
89  78   ECHO/40                   ?0        60:'<i class="text-secondary fas fa-square"></i>' ?0                  	;0
90  79   NOP/0                     ?0        ?0                   ?0                  	;1
91  79   GOTO/253                  ?0        ?93                  ?61                 	;0
92  81   ECHO/40                   ?0        62:'<i class="text-success fas fa-square"></i>' ?0                  	;0
93  83   NOP/0                     ?0        ?0                   ?0                  	;1
94  83   GOTO/253                  ?0        ?46                  ?63                 	;0
95  84   JMP/42                    ?0        ?31                  ?0                  	;0	>>31
96  84   FE_FREE/127               ?0        $15                  ?0                  	;0	<<30
97  87   ECHO/40                   ?0        64:'							</tbody>
						</table>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
98  88   GOTO/253                  ?0        ?118                 ?65                 	;0
99  90   ASSIGN/38                 ?22       16?3                 66:'RTMP IP\'s'     	;0
100 91   INCLUDE_OR_EVAL/73        ?23       67:'header.php'      ?0                  	;2
101 92   ECHO/40                   ?0        68:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
102 93   FETCH_IS/89               $28=      69:'_SERVER'         ?0                  	;0
103 93   ISSET_ISEMPTY_DIM_OBJ/115 #29=      $28                  70:'HTTP_X_REQUESTED_WITH'	;16777216
104 93   BOOL_NOT/13               #30=      #29                  ?0                  	;0
105 93   JMPZ_EX/46                #30=      #30                  ?113                	;0	>>113
106 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'strtolower'     	;1
107 93   FETCH_FUNC_ARG/92         $31=      73:'_SERVER'         ?0                  	;1
108 93   FETCH_DIM_FUNC_ARG/93     $32=      $31                  74:'HTTP_X_REQUESTED_WITH'	;1
109 93   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
110 93   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
111 93   IS_EQUAL/17               #34=      $33                  75:'xmlhttprequest' 	;0
112 93   BOOL/52                   #30=      #34                  ?0                  	;0
113 93   BOOL_NOT/13               #35=      #30                  ?0                  	;0	<<105
114 93   JMPZ/43                   ?0        #35                  ?116                	;0	>>116
115 94   GOTO/253                  ?0        ?1                   ?76                 	;0
116 96   ECHO/40                   ?0        77:' style="display: none;"' ?0                  	;0	<<114
117 97   GOTO/253                  ?0        ?1                   ?78                 	;0
118 99   INCLUDE_OR_EVAL/73        ?32       79:'footer.php'      ?0                  	;2
119 100  NOP/0                     ?0        80:1                 ?0                  	;4294967295
*/

?>