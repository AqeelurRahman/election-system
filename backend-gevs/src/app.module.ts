import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { AuthModule } from './auth/auth.module';
import { UsersModule } from './users/users.module';
import { TypeOrmModule } from '@nestjs/typeorm';
import { ConstituencyModule } from './constituency/constituency.module';
import { ConfigModule } from './config/config.module';

@Module({
  imports: [AuthModule, UsersModule, ConstituencyModule, ConfigModule],
  controllers: [AppController],
  providers: [AppService],
})
@Module({
  imports: [
    TypeOrmModule.forRoot({
      type: 'mysql',
      host: 'localhost',
      port: 3306,
      username: 'root',
      password: '',
      database: 'gevs',
      entities: [],
      synchronize: true,
    }),
  ],
})
export class AppModule {}
