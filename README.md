# PHP-Profile
SQL DB and ChartJS
Main
![Main](https://user-images.githubusercontent.com/50046414/193515768-199cc19b-604a-4cb3-aab1-05abeb1c4d4b.png)

![contact](https://user-images.githubusercontent.com/50046414/193515766-097b9f5c-446c-414c-b325-1613812dd9f2.png)
Contact
![Add](https://user-images.githubusercontent.com/50046414/193515772-a59e4972-ecad-4d53-a855-b3da52648292.png)
Mail via PHPMailer

Table and vars
CREATE TABLE [dbo].[Persons](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Lastname] [varchar](255) NOT NULL,
	[Firstname] [varchar](255) NOT NULL,
	[Age] [int] NULL,
	[Email] [varchar](255) NULL,
	[Status] [bit] NOT NULL,
	[Musictaste] [nvarchar](50) NULL,
	[Language] [varchar](255) NULL,
	[Start_time] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
