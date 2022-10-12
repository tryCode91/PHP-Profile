# PHP-Profile

![image](https://user-images.githubusercontent.com/50046414/194237043-33db35f6-fe33-4751-9e35-5101d6a0650e.png)
![image](https://user-images.githubusercontent.com/50046414/194237400-52df2a6b-b366-427d-b21f-2597b4118c02.png)
![image](https://user-images.githubusercontent.com/50046414/195370204-5c79471e-7dc9-4829-a05a-47e1f7aed7f3.png)
![image](https://user-images.githubusercontent.com/50046414/195370949-88ac8237-e019-4906-a360-1392f046164d.png)

Tables used 
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
	[Password] [varchar](255) NULL
)
CREATE TABLE [dbo].[storeImage](
	[imageID] [int] NOT NULL,
	[Image] [varchar](100) NULL,
	[time_added] [datetime] NULL
) ON [PRIMARY]
CREATE TABLE [dbo].[person_details](
	[id] [int] NULL,
	[Work_experience] [varchar](max) NULL,
	[Additional_details] [varchar](max) NULL,
	[time] [datetime] NULL,
	[Languages] [varchar](128) NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
